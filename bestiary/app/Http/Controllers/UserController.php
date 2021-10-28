<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * shows the username on the users page
     */
    public function show($id) {
        if($user = User::find($id)->get()){
            if($id == auth()->user()->id)
            return view('users.index', compact('user'));
        }else {
            abort(4400);
        }
    }

    /**
     * edits the user's data.
     */
    public function edit($id){
        if($user = User::find($id)){
            if($id == auth()->user()->id){
                return view('users.edit', compact('user'));
            }
        }
    }

    /**
     * updates the articles based on their category.
     */

    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id)->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return view('users.index', compact('user'));
    }

    /**
     * sends the user data with the comment.
     */
    public function comments($id){
        if($users = Comment::where('user_id', $id)->get()){
            return view('partials.comment', compact('users'));
        }
    }



}
