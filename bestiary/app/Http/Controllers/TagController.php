<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;
use function React\Promise\all;

class TagController extends Controller
{
    public function category($tags){
        if ($categoryItems = Creature::where('tags',$tags)->get()) {
            return view('blog.category', compact('categoryItems'));
        }
    }
}
