<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post){
        //return view('home');
        $posts = $post::latest()->get();
        return view('post.index')->with(['posts'=>$posts]);
    }
}
