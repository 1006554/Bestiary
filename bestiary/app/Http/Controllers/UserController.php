<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view(users.index);
    }

    public function favorites(){
        return view();
    }

    public function toggle(){
        return view();
    }

}
