<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use Illuminate\Http\Request;

class CreatureController extends Controller
{

    public function index()
    {

        return view('home',
            [
                'searchResults' => $this->getSearch()
            ]);
    }


    protected function getSearch(){
        $searchResults = Creature::latest();

        if (request('search')){
            $searchResults
            ->where('name', 'like', '%' . request('search') .'%')
                ->orWhere('description', 'like', '%' . request('search') .'%');
        }
        return $searchResults->get();
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
        $creature = Creature::find($id);
        $creature->update($request->all());
        return redirect('/');
    }

    public function toggle(){
        return view();
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
