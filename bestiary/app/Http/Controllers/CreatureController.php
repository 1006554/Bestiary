<?php

namespace App\Http\Controllers;
use App\Models\Creatures;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    public function index(){
        $creatures = Creatures::select('name')->get();

        return view('home', compact('creatures'));
    }

    function post($creatureId){
        if ($creatureId == Creatures::select('id')->get()){
            $post = Creatures::select($name = 'name', $description = 'description', $image = 'image')->get();
            return view('creature.'.$creatureId,
                [
                    'post' => $post,
                    'name' => $name,
                    'description' => $description,
                    'image' => $image
                ]);
        };

    }

}
