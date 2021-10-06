<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Http\Request;

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
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function(){
  return view('home');
});Route::get('/search', function(){
    return view('blog.search');
});
Route::get('/favorites', function(){
    return view('users.favorites');
});
Route::get('/create',[CreatureController::class, 'create']);
Route::get('/{tags}', [TagController::class, 'category']);
Route::get('/article/{id}', [CreatureController::class, 'show']);
Route::get('/article/{id}/edit', [CreatureController::class, 'edit']);


