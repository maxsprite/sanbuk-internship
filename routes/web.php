<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\UserController;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/users')->name('users.')->group(function () {
    Route::get('/sign-up', [UserController::class, 'signUp'])->name('sign-up');
});

Route::get('/experiences', function () {
    return view('experiences');
});

Route::get('/auth/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
})->name('auth.facebook.redirect');

Route::get('/auth/facebook/callback', function () {
    ray('asdasdasdadasdasd1111');

    $user = Socialite::driver('facebook')->user();
    \App\Models\User::updateOrCreate([
        'facebook_id' => $user->getId(),
    ], [
        'name' => $user->getName(),
        'email' => $user->getEmail(),
    ]);

    return '123123';
})->name('auth.facebook.callback');
