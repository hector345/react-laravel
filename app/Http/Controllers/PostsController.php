<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Suport\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     * creado con {php artisan make:controller PostsController --resource}
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "index";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //view('posts.create');
        // return "fdfdf";
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
        //dd($request->all());
        //$post = new Post;
        //$post->title = $request->input("title");
        //$post->excerpt = $request->input("excerpt");
        //$post->content = $request->input("content");
        //$post->save();
        //Post::create([
        //    'title' => $request->input("title"),
        //    'excerpt' => $request->input("excerpt"),
        //    'content' => $request->input("content"),
        //]);

        Post::create($request->all());
        return redirect("/");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //mostrar un post en particular
        // $post= Post::find($id);
        $coments = $post->comments;
        return view('posts.show')->with([
            'post' => $post,
            'comments' => $coments
        ]);

        //return "page de post con id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return  view('posts.edit')->with('post', $post);
        //return "page editar de post con id: {$post}";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update([
            'title' => $request->input("title"),
            'excerpt' => $request->input("excerpt"),
            'content' => $request->input("content"),
        ]);
        return redirect("/");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect("/");
        //
    }
}
