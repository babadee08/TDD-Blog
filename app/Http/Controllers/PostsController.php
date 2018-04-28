<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * @param Post $post
     * @return $this
     */
    public function index(Post $post){
        //return view('home');
        $posts = $post::latest()->get();
        return view('post.index')->with(['posts'=>$posts]);
    }

    public function show(Post $post)
    {
        return view('post.show', ['post'=>$post]);
    }
}
