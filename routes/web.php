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

Route::get('/TroopFeed/{troop_id}', [FeedController::class, 'showTroopPosts']) ->middleware('auth');

Route::get('/TroopFeed/createPost/{troop_id}', [FeedController::class, 'createTroopPost']) ->middleware('auth');

Route::post('/FeedPage', [FeedController::class, 'storePost']);

Route::get('/login', [UserController::class, 'login'])->name('login');

Route::get('/register', [UserController::class, 'register']);

Route::post('/users', [UserController::class, 'storeUser']);

Route::post('/users/authenticate', [UserController::class, 'authenticate']);