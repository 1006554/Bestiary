<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id) {
            $articles = Creature::where('user_id', $id)->get();
            return view('users/index', compact('articles'));
    }

    public function toggle(Request $request){
        $article = Creature::find($request->id);
        $article->toggle = $request->toggle;
        $article->save();

        return response()->json(['success'=>'User status change successfully.']);
    }

    public function edit(){

    }

    public function update(){

    }

    public function favorites(){
        return view();
    }



}
