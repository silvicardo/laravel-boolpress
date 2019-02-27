<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;


class CategoryController extends Controller
{

    public function postsPerCategory($slug)
    {
        $category = Category::where('slug', $slug)->first();

        if (empty($category)) { abort(404); }

        $posts = $category->posts;

        $data = [ 'category' => $category, 'posts' => $posts  ];

        return view('categories_posts.index', $data);

    }

    public function categoryPostAtId($slug, $postid)
    {
      $category = Category::where('slug', $slug)->first();

      if (empty($category)) { abort(404); }

      $post = $category->posts->where('id', $postid)->first();

      if (empty($post)) { abort(404); }

      $data = [ 'category' => $category, 'post' => $post ];

      return view('categories_posts.show', $data);

    }



}
