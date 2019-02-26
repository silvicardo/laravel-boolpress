@extends('layouts.admin_app')

@section('title','All Posts');

@section('content')

<section  class="posts container py-5">

  <h1 class="mb-5">All Posts</h1>

  {{-- pagination-placeholder $posts->links() --}}
  <table class="table text-center mt-5">
      <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>
            <th></th>
            <th></th>
            <th></th>

      </thead>
      <tbody>
        @forelse ($posts as $post)
          <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ str_limit($post->content, 10, '...') }}</td>
            <td>
              <a class="btn btn-success" href="{{ route('admin.posts.show', $post->id)}}">Detail</a>
            </td>
            <td>
              <a class="btn btn-warning"href="{{ route('admin.posts.edit', $post)}}">Edit</a>
            </td>
            <td>
              <form action="{{ route('admin.posts.destroy', $post->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
        @empty
          <h1>No posts</h1>
        @endforelse
      </tbody>
    </table>

</section>

@endsection
