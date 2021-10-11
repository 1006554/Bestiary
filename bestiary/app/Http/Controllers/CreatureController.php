<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{

    public function index()
    {

        return view('home',);
    }




    public function category($tags){
        if ($categoryItems = Creature::where('tags',$tags)->get()) {
            return view('blog.category', compact('categoryItems'));
        }
    }
    /**
     * shows article
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */

    public function show($id) {
        if($creature = Creature::find($id)){
            return view('blog.article', compact('creature'));
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
    public function store(Request $request){
        $creature = Creature::create([
            'name' => $request->name,
            'image' => $request->image,
            'description'=>$request->description,
            'tags' => $request->tag
        ]);
        $creature->save();
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if($creature = Creature::find($id)){
            return view('users.edit', compact('creature'));
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

        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $creature = Creature::find($id)->update($request->all());

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $creature = Creature::find($id);
        $creature->delete();
        return redirect('/');

        /* if user is users{
        then delete creature out of database}
        */
    }
}
