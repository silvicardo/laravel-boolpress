<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
  public function index()
  {
      $lastPosts = Post::orderBy('id', 'desc')->take(5)->get();
      return view('home', compact('lastPosts'));
  }
}
