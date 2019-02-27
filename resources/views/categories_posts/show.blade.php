@extends('layouts.admin_app')

@section('title','Show Post in Category')

@section('content')

<section  class="show-post container py-5">

  <div class="post-head mb-5">
    <h1 class="">{{ $post->title }}</h1>
    <h5>Written by {{ $post->author }}</h3>
    <h6>Category: {{ $category->title }}</h6>
  </div>

  <p>{{$post->content}}</p>

  <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

</section>

@endsection
