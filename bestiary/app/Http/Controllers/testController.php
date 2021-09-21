<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class testController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::select('select username from user');
        dd($users);
        return view('user.index', ['username' => $users]);
    }
}
