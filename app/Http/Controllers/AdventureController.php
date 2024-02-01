<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Aventure;
use App\Models\Destination;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdventureController extends Controller
{

    public function getUserAventures()
    {
        $user = auth()->user();
        $userAventures = $user->userAventures;

        return view('profile', ['UserAventures' => $userAventures]);
    }




    public function index()
    {
        $aventures = Aventure::with('user', 'destination', 'images')->get();
        $destinations = Destination::all();
        $uniqueDestinationsCount = Aventure::distinct('destination_id')->count();

        $countUser = User::count();
        $countAdventure = Aventure::count();

        return view('home', [
            'aventures' => $aventures, 'destinations' => $destinations, 'countUser' => $countUser,
            'countAdventure' => $countAdventure,
            'uniqueDestinationsCount' => $uniqueDestinationsCount
        ]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'Title' => 'required|string',
            'image.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
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
