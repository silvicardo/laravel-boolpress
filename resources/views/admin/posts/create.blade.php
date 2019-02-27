@extends('layouts.admin_app')

@section('title','Create Post')

@section('content')

<section  class="create-post container py-5">

  <h1>Create New Post</h1>

    <form class="my-5"  method="POST" action="{{ route('admin.posts.store')}}">
      @csrf
      <div class="form-group">
        <label>Author</label>
        <input type="text" class="form-control" name="author" placeholder="New post author" value="{{ Auth::user()->name }}">
      </div>
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="New post title" value="">
      </div>
      <div class="form-group">
        <label>Content</label>
        <textarea class="form-control" name="content" rows="3" value=""></textarea>
      </div>
      <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-control">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{ $category->title }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your Post</button>
    </form>

    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

</section>

@endsection
