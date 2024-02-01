<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Aventure;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
//     public function Counts()
// {
//     $uniqueDestinationsCount = Aventure::distinct('destination_id')->count();

//     $countUser = User::count();
//     $countAdventure = Aventure::count();

//     return view('home', [
//         'countUser' => $countUser,
//         'countAdventure' => $countAdventure,
//         'uniqueDestinationsCount' => $uniqueDestinationsCount
//     ]);
// }

    
    public function login(Request $request)
    {
        $incomingFields = $request->validate([
            'loginemail' => 'required',
            'loginpassword' => 'required'
        ]);

        if (auth()->attempt(['email' => $incomingFields['loginemail'], 'password' => $incomingFields['loginpassword']])) {
            $request->session()->regenerate();
        }
        return redirect('/home');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }


    public function register(Request $request)
    {
        $incomingFields = $request->validate([
            'name' => ['required', 'min:3', 'max:10', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:3', 'max:200'],
        ]);

        $incomingFields['password'] = bcrypt($incomingFields['password']);
        $user = User::create($incomingFields);
        auth()->login($user);

        return redirect('/home');
    }
}
