@extends('layouts.admin_app')

@section('title','Show Category');

@section('content')

<section  class="show-category container py-5">

  <h1 class="">Category name: {{ $category->title }}</h1>

  <p>Category Slug: {{$category->slug}}</p>

  <div class="buttons mt-5">
      <a class="btn btn-warning mr-2"href="{{ route('admin.categories.edit', $category)}}">Edit</a>
      <form class="d-inline" action="{{ route('admin.categories.destroy', $category->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
      </form>
  </div>

</section>

@endsection
