<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;
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
Route::group(['prefix' => 'blog'], function(){
    Route::get('/', function () {
        return view('blog.welcome');
    })->name('blog.welcome');
    Route::get('/', [CreatureController::class, 'index']);

    Route::get('post/{creatureId}', function () {
        return view('blog.post');
    })->name('blog.post');
});


Route::group(['prefix'=> 'admin'], function(){
    Route::get('', function() {
        return view('index');
    })->name('index');

    Route::post('create', function(){
        return "It works!";
    })->name('create');

    Route::get('create', function(){
        return view('admin.create');
    })->name('admin.create');

    Route::get('edit/', function(){
        return view('admin.edit');
    })->name('edit');

    Route::post('edit', function(){
        return "It works!";
    })->name('update');
});

/*Route::get('login' function(){
    return view('admin.login');
});
*/







