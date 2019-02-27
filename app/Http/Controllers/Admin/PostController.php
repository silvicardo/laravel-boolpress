<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Category;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::all();

        return view('admin.posts.index', compact('posts'));
    }


    public function create()

    {
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }

    public function store(Request $request)
    {

        $formData = $request->all();
         $newPost = new Post();
         $newPost->fill($formData);
         $newPost->save();
         return redirect()->route('admin.posts.index');

    }

    public function show(Post $post)
    {
        if (!empty(Post::find($post->id))){
          return view('admin.posts.show', compact('post'));
        } else {
          return redirect()->back();
        }

    }

    public function edit(Post $post)
    {
      if (!empty(Post::find($post->id))){
        return view('admin.posts.edit', compact('post'));
      } else {
        abort(404);
      }
    }

    public function update(Request $request, Post $post)
    {
        if (!empty(Post::find($post->id))){

          $formData = $request->all();
          $post->update($formData);
          return redirect()->route('admin.posts.index');

        } else {
          abort(404);
        }
    }

    public function destroy($id)
    {
      if (!empty(Post::find($id))){

        $post = Post::find($id);
        $post->delete();
        return redirect()->route('admin.posts.index');

      } else {
        abort(404);
      }
    }
}
