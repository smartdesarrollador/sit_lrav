<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostForm;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view("posts.index")->with('posts', \App\Post::paginate(1)->setPath('post'));
    }


    /* 

     public function crear()
    {
        return view("posts.create");
    }

    */


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create()
    {
        return view("posts.createUpdate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(PostForm $postForm)
    {
            $post = new \App\Post;
 
    $post->title = \Request::input('title');
 
    $post->body = \Request::input('body');
 
    $post->save();
 
    return redirect('post/create')->with('message', 'Post saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return view('posts.createUpdate')->with('post', \App\Post::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, PostForm $postForm)
    {
        $post = \App\Post::find($id);
 
    $post->title = \Request::input('title');
 
    $post->body = \Request::input('body');
 
    $post->save();
 
    return redirect()->route('post.edit', ['post' => $id])->with('message', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
            $post = \App\Post::find($id);
 
    $post->delete();
 
    return redirect()->route('post.index')->with('message', 'Post deleted');
    }

    public function hola(){
        return "hola mundo";
    }
}
