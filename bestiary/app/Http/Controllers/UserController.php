<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
        if($user = User::find($id)->get()){
            return view('users.index', compact('user'));
        }
    }


    public function edit($id){
        if($user = Creature::find($id)){
            return view('users.edit', compact('user'));
        }
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id)->update($request->all());

        return redirect('/');
    }

    public function comments($id){
        if($users = Comment::where('user_id', $id)->get()){
            return view('partials.comment', compact('users'));
        }
    }



}
