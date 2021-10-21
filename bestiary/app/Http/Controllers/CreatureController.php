<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use Illuminate\Http\Request;

class CreatureController extends Controller
{

    public function index()
    {
        return view('home',);
    }


    public function category($tags)
    {
        if ($categoryItems = Creature::where('tags', $tags)->get()) {
            return view('blog.category', compact('categoryItems'));
        }
    }

    public function showProfilePosts($id)
    {
        if ($createdCreatures = Creature::where('user_id', $id)->get()) {

            return view('users.list', compact('createdCreatures'));
        }
    }

    /**
     * shows article
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|void
     */

    public function show($id)
    {
        if ($creature = Creature::find($id)) {
            return view('blog.article', compact('creature'));
        }
    }

    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required|unique:creatures',
            'description' => 'required',
            'image' => 'required',
            'tags' => 'required',
            'user_id'=> 'required'
        ]);

        $creature = Creature::create($input);
        return view('blog.article', compact('creature'));

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
            return view('blog.article-edit', compact('creature'));
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
            'name' => 'nullable',
            'description' => 'nullable',
        ]);
        $creature = Creature::find($id)->update($request->all());

        return redirect('blog.article', compact('creature'));
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
    }

    public function toggle(Request $request){
        $creature = Creature::find($request->id);

        if($creature->toggle == 1) {
            $creature->toggle = 0;
            } else{
            $creature->toggle = 1;
        }

        $creature->update($request->all());
        return redirect('/');
    }


}
