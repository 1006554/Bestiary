<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    public function index(){
        //get data from Creature model
        $creatures = creature::all();
        //pass to creature view
        return view('creatures.index');
    }
}
