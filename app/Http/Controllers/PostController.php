<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('posts.index', compact('posts'));
    }

    public function show($id)
    {
        if (!empty(Post::find($id))){

          $post = Post::find($id);
          return view('posts.show', compact('post'));
        } else {
          return redirect()->back();
        }

    }

}
