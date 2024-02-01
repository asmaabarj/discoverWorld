<?php

use App\Models\Destination;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdventureController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('login');

Route::get('/register', function () {
    return view('welcome');
})->name('register');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/posts', function () {
    $destinations = Destination::all();
    return view('posts', ['destinations' => $destinations]);
})->name('posts');


Route::get('/home', [AdventureController::class, 'index']);

// Route::get('/home', function () {
//     $destinations = Destination::all();
//     return view('home', ['destinations' => $destinations]);
// })->name('home');


Route::post('/register', [UserController::class,'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);
Route::post('/profile', [AdventureController::class, 'store'])->name('adventure.store');



