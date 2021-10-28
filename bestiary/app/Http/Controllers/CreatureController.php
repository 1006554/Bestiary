<?php

namespace App\Http\Controllers;
use App\Models\Creature;
use App\Models\User;
use Illuminate\Http\Request;

class CreatureController extends Controller
{

    /**
     * randomly shows 3 articles on the home page
     */
    public function index()
    {
        $creatures = Creature::inRandomOrder()->where('toggle', 1)->limit(3)->get();
        return view('home', compact ('creatures'));
    }

    /**
     * shows the articles based on their category.
     */

    public function category($tags)
    {
        if ($categoryItems = Creature::where('tags', $tags)->get()) {
            return view('blog.category', compact('categoryItems'));
        }
    }

    /**
     * shows articles made by a specific user
     */

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
            $this->validate($request,[
            'name' => 'required|unique:creatures',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg,gif,svg',
            'tags' => 'required',
            'user_id'=> 'required',
            'toggle' => 'required'

        ]);

        $creature = Creature::create([
            'name' => $request->name,
            'description' => $request->description,
            'image' => $request->file('image')->storePublicly('images', 'public'),
            'tags' => $request->tags,
            'user_id' => $request->user_id,
            'toggle' => $request->toggle,
        ]);

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
        $user = User::find(auth()->user()->id);
        if($creature = Creature::find($id)){
            if($creature->user_id == auth()->user()->id or $user->creatures()->count() >= 5 or $user->is_admin == 1){
                return view('blog.article-edit', compact('creature'));
            } else{
                return back()->with('error');
            }
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
            'toggle' => 'required',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg',
        ]);

        $creature = Creature::find($id)->update([
            'name' => $request->name,
            'description' => $request->description,
            'toggle' => $request->toggle,
            'image' =>  $request->file('image')->storePublicly('images', 'public'),
        ]);

        return redirect('users.list');
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
        $user = User::where('id', '=',$creature->user_id )->get();
        if($creature->user_id == auth()->user()->id or auth()->user()->is_admin == 1) {
            $creature->delete();
            return redirect('/');
        } else {
            return back()->with('error');
        }
    }

    /**
     * sets the article either to published or drafted.
     */

    public function toggle(Request $request){
        $creature = Creature::find($request->id);

        if($creature->toggle == 1) {
            $creature->toggle = 0;
            } else{
            $creature->toggle = 1;
        }

        $creature->update($request->all());
        return back();
    }


}
