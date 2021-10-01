<?php

namespace App\Http\Controllers;
use App\Models\Creatures;
use Illuminate\Http\Request;
use function React\Promise\all;

class TagController extends Controller
{
    public function category($tags){
        if ($categoryItems = Creatures::where('tags',$tags)->get()) {
            return view('blog.category', compact('categoryItems'));
        }
    }
}
