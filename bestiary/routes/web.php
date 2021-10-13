<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FindController;
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


Route::get('/', [CreatureController::class, 'index']);

Route::get('/index', [UserController::class, 'show' ]);


Route::get('/favorites', function(){
    return view('users.favorites');
});


Route::get('/search', [FindController::class, 'index']);


Route::resource('creatures', CreatureController::class );

Route::resource('users', UserController::class);


Route::get('/{tags}', [CreatureController::class, 'category']);


Route::get('changeStatus', 'UserController@toggle');
