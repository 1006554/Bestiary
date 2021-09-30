<?php

namespace App\Http\Controllers;
use App\Models\Creatures;
use Illuminate\Http\Request;
use function React\Promise\all;

class MythologyController extends Controller
{
    public function mythology()
    {
        if($tags = 'Mythology'){
            $names = Creatures::find($tags);
            return view('blog.mythology', compact('names'));
        };
        }
}
