<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\Auth\LoginController;

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
    return view('home');
})->name('home');
Route::get('/', [CreatureController::class, 'index']);
route::get('/{tags}', [TagController::class, 'category']);
Route::get('article/{id}', [CreatureController::class, 'show']);
Route::get('create', [CreatureController::class, 'create']);
Route::get('article/{id}/edit', [CreatureController::class, 'edit']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
