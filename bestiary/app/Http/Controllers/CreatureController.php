<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{
    public function index(){

        $creatures = Creature::all();


        return view('blog.welcome', compact('creatures'));
    }
}
