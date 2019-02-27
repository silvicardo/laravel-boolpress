@extends('layouts.admin_app')

@section('title','Create Category')

@section('content')

<section  class="create-category container py-5">

  <h1>Create New Category</h1>

    <form class="my-5" method="POST" action="{{ route('admin.categories.store')}}">
      @csrf
      <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="New category title" value="">
      </div>
      {{-- lo slug analogamente al seeder viene curato in category controller a seguito del create --}}
      <button type="submit" class="btn btn-primary btn-lg btn-block">Submit your Category</button>
    </form>
    <a href="{{ url()->previous() }}" class="btn btn-info">Back</a>

</section>

@endsection
