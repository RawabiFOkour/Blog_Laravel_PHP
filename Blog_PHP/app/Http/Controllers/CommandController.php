<?php

namespace App\Http\Controllers;

use App\Command;
use App\Post;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.create_command');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $user_id =Auth::id();
        $command = new Command();
        $command->text =request('text');
        $command->post_id = $id;
        $command->user_id = $user_id;
        $command->save();

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
        $comments = Command::findOrFail($id);
        return view('pages.edit_comments',compact('comments'));
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
        $comments=Command::findOrfail($id);
        $comments->text=request('text');
        $comments->save();
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
        Command::findOrFail($id)->delete();
        return redirect('/posts');
    }

    public function add_command($id){
        $id=Post::findOrFail($id);
//        dd($id->id);
       return view('pages.create_command',compact('id'));

    }

    public function comments_home($id,$user_id){


        $id=Post::findOrFail($id);
        $user=Post::findOrFail($user_id);



  return view('pages.create_comments_home',compact('id','user'));
    }

    public function save($id,$user){

        $comments=new Command();
        $comments->text =request('text');
        $comments->post_id = $id;
        $comments->user_id = $user;
        $comments->save();

        return redirect('/');

    }
}
