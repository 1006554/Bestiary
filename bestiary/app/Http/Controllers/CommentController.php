<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Creature;
use App\Models\User;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * shows the comment on the article.
     */
    public function show($id){

        $usernames = User::where('id')->get();
        if ($comments = Comment::where('creature_id', $id)->get()) {
            return view('partials.comment', compact('comments', 'usernames'));
        }
    }

    /**
     * creates the comment.
     */
    public function create($id){
        if ($creature = Creature::find($id)) {
            return view('partials.create.comment');
        }
    }

    /**
     * stores the created comment.
     */

    public function store(Request $request)
    {
        $request->validate([
            'body'=>'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        return back();
    }
}
