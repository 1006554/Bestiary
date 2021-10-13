<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($userId = null) {
        $user = null;

        if($userId != null) {
            $user = User::find($userId);
        } else {
            $user = User::find(Auth::user()->id);
        }

        return view('user/index', [
            'user' => $user
        ]);
    }

    public function edit(){

    }

    public function update(){

    }

    public function favorites(){
        return view();
    }



}
