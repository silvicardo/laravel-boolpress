@extends('layouts.admin_app')

@section('title','Show Post')

@section('content')

<section  class="show-post container py-5">

  <div class="post-head mb-5">
    <h1 class="">{{ $post->title }}</h1>
    <h5>Written by {{ $post->author }}</h3>
  </div>

  <p>{!! $post->content !!}</p>

  <a href="{{ url()->previous() }}" class="btn btn-info mr-3">Back</a>
  <a href="{{ route('posts.index') }}" class="btn btn-info">All Posts</a>
</section>

@endsection
