<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//usar modelo Post
use App\Models\Post;
use Illuminate\Suport\Facades\DB;

class HomeController extends Controller
{
    //
    //show
    public function show()
    {
        //$posts = Post::get();
        $posts = Post::orderBy('id', 'desc')->get();

        return view('welcome')->with('posts', $posts)->with("tituloh1", "Titulo de la pagina");
    }
}
