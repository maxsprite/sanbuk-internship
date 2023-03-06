<?php

use App\Http\Controllers\V1\Booking\WebhookController;
use App\Http\Controllers\V1\BookingController;
use App\Http\Controllers\V1\ExperienceController;
use App\Http\Controllers\V1\SubscriptionController;
use App\Http\Controllers\V1\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('/auth')->group(function () {
    Route::post('/sign-up', [UserController::class, 'signUp']);
    Route::post('/sign-in', [UserController::class, 'signIn']);
    Route::post('/verification', [UserController::class, 'verification']);
});

Route::prefix('/user')->name('user.')->middleware('auth:sanctum')->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::delete('/profile', [UserController::class, 'delete'])->name('profile.delete');

    Route::prefix('/subscription')->group(function () {
        Route::post('/create', [SubscriptionController::class, 'create']);
        Route::patch('/update', [SubscriptionController::class, 'update']);
    });
});

Route::get('/products', function () {
//    $someArray = [1, 2, 3];
//    $someArray[] = 4;
//
//    $someCollection = collect([1, 2, 3]);
//    $someCollection->push(4);
//
//    ray('$someArray', $someArray);
//    ray('$someCollection', $someCollection);
    $users = \App\Models\User::all();
//    ray('$users', $users->pluck('email', 'id')->toArray());
    foreach ($users as $user) {
        ray('user', $user);
    }

    return Cache::rememberForever('stripe-products', function () {
        $stripeService = new \App\Services\StripeService();
        return $stripeService->client->products->all();
    });
});

Route::get('/users', function () {
    return new \App\Http\Resources\V1\UserCollection(\App\Models\User::all());
});

Route::prefix('/experiences')->group(function () {
    Route::get('/', [ExperienceController::class, 'index']);
});

Route::prefix('/bookings')->group(function () {
    Route::middleware(['auth:sanctum'])->group(function () {
        Route::post('/create', [BookingController::class, 'store']);
    });

    Route::prefix('/webhooks')->group(function () {
         Route::any('/charge/succeeded', [WebhookController::class, 'chargeSucceeded']);
    });
});

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
