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

    /**
     * shows article
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */

    public function show($id) {
        if($article = Creatures::find($id)){
            return view('blog.article', compact('article'));
        }
    }

    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $newCreature = Creatures::create([$request[
                 'name'=> $name,
                 'image'=> $request,
                 'description'=> $request,
                 'tags'=>$request
             ]
         );*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($article = Creatures::find($id)){
            return view('users.edit', compact('article'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //store the updates information and redirect user
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* if user is users{
        then delete creature out of database}
        */
    }

}
