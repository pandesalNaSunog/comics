<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ComicController::class, 'showComics']);

Route::get('/add', function(){
    return view('add-comic', [
        'active' => 'add'
    ]);
})->middleware('auth');

Route::post('/add-comic', [ComicController::class, 'createComic'])->middleware('auth');
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::get('/login',[UserController::class, 'showLogin'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login']);
Route::post('/register', [UserController::class,'store']);
Route::post('/logout', [UserController::class, 'logout']);
