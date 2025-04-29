<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
//routes/web.php
use App\Http\Controllers\PostController;

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

Route::get('/', [HalamanController::class, 'fathan'])-> name('fathan');
Route::get('/fathan', [HalamanController::class, 'fathan'])-> name('fathan');
Route::get('/about', [HalamanController::class, 'about'])-> name('about');
Route::get('/contact', [HalamanController::class, 'contact'])-> name('contact');
Route::get('/hobby', [HalamanController::class, 'hobby'])-> name('hobby');
Route::post('/', function (App\Http\Requests\PostRequest $request) {

    return back()->with('success','Data Added Successfully.');
    });
Route::resource('posts', PostController::class);

Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name('doLogin');
Route::post("/do-logout", [UserController::class, "doLogout"])->name('doLogout');

Route::get("/sample", [UserController::class, "createSample"])->name('createSample');

