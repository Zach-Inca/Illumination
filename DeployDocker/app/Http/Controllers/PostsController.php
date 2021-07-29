<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = auth()->user()->following()->pluck('profiles.user_id');

       $posts = Post::whereIn('user_id', $users)->with('user')->latest()->paginate(5);

       return view('posts.index', [
           'posts' => $posts
        ]);
    }

    public function new()
    {
        $posts = Post::all();

        return view('posts.new',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $data = request()->validate([
                'caption' => 'required',
                'title' => 'required',
                'ingredients' => 'required',
                'instructions' => 'required',
                'servings' => 'required',
                'c_time' => 'required',
                'p_time' => 'required',
                'notes' => 'required',
                'image' => 'required|image',
            ]);
    
            $imagePath = request('image')->store('uploads','public');
    
            auth()->user()->posts()->create([
                'caption' => $data['caption'],
                'title' => $data['title'],
                'ingredients' => $data['ingredients'],
                'instructions' => $data['instructions'],
                'servings' => $data['servings'],
                'c_time' => $data['c_time'],
                'p_time' => $data['p_time'],
                'notes' => $data['notes'],
                'image' => $imagePath,
            ]);
           
    
            return redirect('/profile/' . auth()->user()->id);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findorfail($id);

        return view('posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findorfail($id);
        dd($post);
        return view('posts.create');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
