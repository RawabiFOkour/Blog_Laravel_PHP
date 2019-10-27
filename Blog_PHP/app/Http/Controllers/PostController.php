<?php

namespace App\Http\Controllers;

use App\Command;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id =Auth::id();
       $posts = Post::with('comments')->where('user_id',$user_id)->get();

//        return view('pages.dashbord',compact('tasks'));
        //$posts=Post::all();
        $commands=Command::all();

        return view('pages.dashbord',compact('posts','commands','user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user_id=Auth::id();
        $post = new Post();
        $post->text =request('text');
        $post->user_id = $user_id;
        $post->save();

        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $post=Post::findOrFail($id);
        $post->text=request('text');
        $post->save();
        return redirect('/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Post::findOrFail($id)->delete();
        return redirect('/posts');
    }

    public function get_post(){
         $posts=Post::with('comments')->get();
         $users=User::get();

        return view('pages.landing_page',compact('posts','users'));
    }
}
