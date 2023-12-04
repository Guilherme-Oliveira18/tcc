<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Gincana;
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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
])->group(function () {
    //Route::get('/sobre',[PostController::class,'sobre']) -> name('blog.sobre');
  //  Route::get('/gincana',[PostController::class,'sobre']) -> name('blog.sobre');
})
*/

Route::get('/',HomeController::class) -> name('home');
Route::get('/blog',[PostController::class,'index']) -> name('blog.index');
Route::get('/sobre',[PostController::class,'sobre']) -> name('blog.sobre');
Route::get('/gincana',[Gincana::class,'index']) -> name('gincana.index');
Route::get('/gincana/mascote',[Gincana::class,'mascote']) -> name('gincana.mascote');
Route::get('/gincana/tabela',[Gincana::class,'pontos']) -> name('gincana.tblpontos');
Route::get('/gincana/agenda',[Gincana::class,'agenda']) -> name('gincana.agenda');
Route::get('/gincana/regulamento',[Gincana::class,'regulamento']) -> name('gincana.regulamento');
Route::get('/historia', [PostController::class,'historia'])-> name('blog.historia');
Route::get('/blog/{post:slug}',[PostController::class,'show']) -> name('blog.show');

;
