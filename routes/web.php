<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RatingController;

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

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/posts',[PostController::class, 'index'])->name('posts');
    Route::get('/add/post',[PostController::class, 'create']);
    Route::post('/save',[PostController::class, 'store'])->name('save');
    Route::get('/post/details/{slug}',[PostController::class, 'show']);
    Route::post('/delete/post/{id}',[PostController::class,'destroy']);
    Route::get('/edit/post/{slug}',[PostController::class, 'edit']);
    Route::post('update/{id}',[PostController::class,'update'])->name('update');
    Route::post('rate/{id}',[RatingController::class,'store'])->name('rate');
    Route::get('/filter/{slug}',[PostController::class, 'filter']);
});


