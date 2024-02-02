<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Aventure;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;

class AdventureController extends Controller
{
    public function getUserAventures()
    {
        $user = auth()->user();
        $userAventures = $user->userAventures;

        return view('profile', ['UserAventures' => $userAventures]);
    }

    public function showAdventure(Request $request)
    {
        $uniqueDestinationsCount = Cache::remember('unique_destinations_count', 60, function () {
            return Aventure::distinct('destination_id')->count();
        });

        $countUser = Cache::remember('user_count', 60, function () {
            return User::count();
        });

        $countAdventure = Cache::remember('adventure_count', 60, function () {
            return Aventure::count();
        });

        if ($request->isMethod('post')) {
            $destinationId = $request->input('destinationId');

            $cacheKey = 'adventures_' . $destinationId;
            $aventures = Cache::remember($cacheKey, 60, function () use ($destinationId) {
                return Aventure::with('destination')
                    ->when($destinationId, function ($query) use ($destinationId) {
                        $query->whereHas('destination', function ($subquery) use ($destinationId) {
                            $subquery->where('id', $destinationId);
                        });
                    })
                    ->get();
            });

            $destinations = Cache::remember('destinations', 60, function () {
                return Destination::all();
            });

            return view('home', [
                'aventures' => $aventures,
                'uniqueDestinationsCount' => $uniqueDestinationsCount,
                'destinations' => $destinations,
                'countUser' => $countUser,
                'countAdventure' => $countAdventure
            ]);
        }

        $aventures = Aventure::with('user', 'destination', 'images')->get();
        $destinations = Cache::remember('destinations', 60, function () {
            return Destination::all();
        });

        return view('home', [
            'aventures' => $aventures,
            'destinations' => $destinations,
            'countUser' => $countUser,
            'countAdventure' => $countAdventure,
            'uniqueDestinationsCount' => $uniqueDestinationsCount
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
            'description' => 'required|string',
            'category' => 'string',
        ]);

        if (Auth::check()) {
            $user = Auth::user();

            $adventure = Aventure::create([
                'title' => $request->input('Title'),
                'description' => $request->input('description'),
                'destination_id' => $request->input('destination_id'),
                'user_id' => $user->id,
            ]);

            if ($request->hasFile('image')) {
                foreach ($request->file('image') as $image) {
                    $path = $image->store('images', 'public');

                    $adventure->images()->create([
                        'name' => $path,
                    ]);
                }
            }

            return redirect('/profile');
        } else {
            return redirect('/login')->with('error', 'Please log in to add an adventure.');
        }
    }
}
