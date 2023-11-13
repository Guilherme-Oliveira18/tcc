<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
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

Route::get('/',HomeController::class) -> name('home');
Route::get('/blog',[PostController::class,'index']) -> name('blog.index');
Route::get('/sobre',[PostController::class,'sobre']) -> name('blog.sobre');
Route::get('/blog/{post:slug}',[PostController::class,'show']) -> name('blog.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Route::get('/dashboard', function () {
     //   return view('dashboard');
    //})->name('dashboard');
});