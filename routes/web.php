<?php

use App\Http\Controllers\FeedController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

/* General Redirect */
Route::get('/',function() {
    return redirect('/login');
});
/* Troop Routes */
Route::get('/Troop/{troop_id}/Feed', [FeedController::class, 'showTroopPosts'])->middleware('auth');

Route::get('/Troop/{troop_id}/CreatePost', [FeedController::class, 'createTroopPost'])->middleware('auth');

Route::post('/FeedPage/Troop', [FeedController::class, 'storeTroopPost']);

/* Council Routes */
Route::post('/FeedPage/Council', [FeedController::class, 'storeCouncilPost']);

/* State Routes */
Route::post('/FeedPage/State', [FeedController::class, 'storeStatePost']);

/* Country Routes */
Route::post('/FeedPage/Country', [FeedController::class, 'storeCountryPost']);

/* User Registration/Login */
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register']);

Route::post('/users', [UserController::class, 'storeUser']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

/* Feed Page */
Route::post('/FeedPage/Like', [FeedController::class, 'likePost'])->name('like')->middleware('auth');