<?php

use App\Http\Controllers\TweetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\ExploreController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function(){

    Route::get('/', [TweetController::class,'index']);
    Route::get('/tweets', [TweetController::class,'index'])->name('home');
    Route::post('/tweets', [TweetController::class,'store']);
    Route::post('/profiles/{user:username}/follow', [FollowController::class,'store'])->name('follow');
    Route::get('/profiles/{user:username}/edit', [ProfileController::class,'edit'])->middleware('can:edit,user');
    Route::patch('/profiles/{user:username}', [ProfileController::class,'update'])->middleware('can:edit,user');
    Route::get('/explore', [ExploreController::class,'index']);

});

Route::get('/profiles/{user:username}', [ProfileController::class,'show'])->name('profile');


Auth::routes();


