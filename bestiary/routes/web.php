<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;
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

route::get('/mythology', [\App\Http\Controllers\MythologyController::class, 'index']);

Route::get('post/{creatureId}', function ($creatureId) {
    return view('blog.post');
})->name('blog.post', []);


Route::group(['prefix'=> 'admin'], function(){
    Route::get('/index', function() {
        return view('admin.index');
    })->name('admin.index');

    Route::post('/create', function(\Illuminate\Http\Request $request){
        return redirect()->route('admin.index')->with($request);
    })->name('admin.create');

    Route::get('/create', function(){
        return view('admin.create');
    })->name('admin.store');

    Route::get('/edit/{creatureId}', function($creatureId){
        if ($creatureId == 1){
            $post = [
                'title'=>'Name of the creature',
                'content'=>'Description'
            ];
        }
        return view('admin.edit', ['post' => $post]);
    })->name('admin.edit');

    Route::post('/edit', function(\Illuminate\Http\Request $request){
        return redirect()->route('admin.index')->with('info', 'Post edited' . $request->input('title'));
    })->name('admin.update');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
