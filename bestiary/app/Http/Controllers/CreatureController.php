<?php

namespace App\Http\Controllers;
use App\Models\Creatures;
use Illuminate\Http\Request;
use function React\Promise\race;

class CreatureController extends Controller
{
    public function index(){
        $creatures = Creatures::select('name');

        return view('home', compact('creatures'));
    }

    function article($id) {
        if($article = Creatures::find($id)){
            return view('blog.article', compact('article'));
        }
    }
}
