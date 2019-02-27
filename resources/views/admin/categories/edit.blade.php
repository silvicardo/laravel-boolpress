@extends('layouts.admin_app')

@section('title','Edit Category')

@section('content')

<section  class="edit-category container py-5">

  <h1>Edit {{$category->title}}</h1>

    <form class="my-5" method="POST" action="{{ route('admin.categories.update', $category)}}">
      @csrf
      @method('PUT')
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="New category title" value="{{ $category->title }}">
      </div>
      {{-- lo slug analogamente al seeder viene curato in category controller a seguito dell'update --}}
      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your changes</button>
    </form>
    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

</section>

@endsection
