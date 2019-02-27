@extends('layouts.admin_app')

@section('title','Edit Post')

@section('content')

<section  class="edit-post container py-5">

  <h1>Edit {{$post->title}}</h1>

    <form method="POST" action="{{ route('admin.posts.update', $post)}}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="New post title" value="{{ $post->title }}">
      </div>
      <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" rows="3" value="{{ $post->content}}">{{ $post->content}}</textarea>
      </div>
      {{-- Non aggiungo la modifica alla categoria perchè a quel punto avrebbe più senso per l'utente eliminare e fare un nuovo post --}}
      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your changes</button>
    </form>

</section>

@endsection
