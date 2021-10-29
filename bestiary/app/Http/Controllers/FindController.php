<?php

namespace App\Http\Controllers;

use App\Models\Creature;
use Illuminate\Http\Request;

class FindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search=  $request->get('q');

        if ($search != "") {
            $creatures = Creature::where(function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%')
                    ->orWhere('description', 'like', '%' . $search . '%')
                    ->orWhere('tags', 'like', '%' . $search . '%');;
            })->paginate(2);
            $creatures->appends(['search' => $search]);
        } else {
            $creatures = Creature::paginate(2);
        }
        return View('blog.search')->with('data', $creatures);
    }
}

