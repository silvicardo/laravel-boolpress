@extends('layouts.admin_app')

@section('title','All Posts Per Category')

@section('content')

<section  class="categories container py-5">


    <h1 class="mb-5 d-inline">All posts in {{ $category->title }}</h1>

  {{-- pagination-placeholder $posts->links() --}}
  <table class="table text-center mt-5">
      <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Content</th>

      </thead>
      <tbody>
        @forelse ($posts as $post)
          <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->author }}</td>
                <td>{{ str_limit($post->content, 10, '...') }}</td>
          </tr>
        @empty
          <h1>No posts in this category</h1>
        @endforelse
      </tbody>
    </table>

</section>

@endsection
