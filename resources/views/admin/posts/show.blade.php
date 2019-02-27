@extends('layouts.admin_app')

@section('title','Show Post');

@section('content')

<section  class="show-post container py-5">

  <div class="post-head mb-5">
    <h1 class="">{{ $post->title }}</h1>
    <h5>Written by {{ $post->author }}</h3>
  </div>

  <p>{{$post->content}}</p>

  <div class="buttons mt-5">
      <a class="btn btn-warning mr-2"href="{{ route('admin.posts.edit', $post)}}">Edit</a>
      <form class="d-inline" action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
  </div>

</section>

@endsection
