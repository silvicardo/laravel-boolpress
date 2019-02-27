@extends('layouts.admin_app')

@section('title','All Categories')

@section('content')

<section  class="categories container py-5">


    <h1 class="mb-5 d-inline">All Categories</h1>

  {{-- pagination-placeholder $categories->links() --}}
  <table class="table text-center mt-5">
      <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Slug</th>
            <th></th>
            <th></th>
            <th></th>

      </thead>
      <tbody>
        @forelse ($categories as $category)
          <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->title }}</td>
                <td>{{ $category->slug }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('admin.categories.show', $category) }}">Detail</a>
            </td>
            <td>
              <a class="btn btn-warning"href="{{ route('admin.categories.edit', $category)}}">Edit</a>
            </td>
            <td>
              <form action="{{ route('admin.categories.destroy', $category->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <h1>No Categories</h1>
        @endforelse
      </tbody>
    </table>

</section>

@endsection
