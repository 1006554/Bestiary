<?php

namespace App\Http\Controllers;
use App\Models\Creatures;
use Illuminate\Http\Request;
use function React\Promise\all;

class MythologyController extends Controller
{
    public function index(){
        if($mythologyCrits = Creatures::select('tags', )
            ->where('mythology')
            ->orderBy('name')
            ->get());
        {
            return view('blog.mythology', compact('mythologyCrits'));
        }
            return 'Nothing to see yet';
    }
}
