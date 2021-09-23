<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{

    public function index(){
        //get data from Creature model
        //$creatures = creature::all();
        $info = [
            [
                'name' => 'Flatwoods monster',
                'img' => 'https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fvignette.wikia.nocookie.net%2Fvillains%2Fimages%2F9%2F9c%2FThe_Flatwoods_Monster.jpg%2Frevision%2Flatest%3Fcb%3D20130904164909&f=1&nofb=1',
                'type' => 'Cryptid',
            ],
            [
                'name' => 'Kelly Hopkinsville Goblin',
                'img' => 'http://www.science-rumors.com/wp-content/uploads/2017/11/Hopkinsville-Goblin-aliens.jpg',
                'type' => 'Alien',
            ]
        ];

        //pass to creature view
        return view('welcome',compact('info'));
    }
}
