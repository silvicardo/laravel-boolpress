@extends('layouts.admin_app')

@section('title','All Posts')

@section('content')

<section  class="posts container py-5">


    <h1 class="mb-5 d-inline">All Posts</h1>

  {{-- pagination-placeholder $posts->links() --}}
  <table class="table text-center mt-5">
      <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Content</th>
            <th></th>
            <th></th>
            <th></th>

      </thead>
      <tbody>
        @forelse ($posts as $post)
          <tr>
                <td>{{ $post->id }}</td>
                <td><a href="{{route('posts.show',$post->id)}}">{{ $post->title }}</a></td>
                <td>{{ $post->author }}</td>
                <td>{{ $post->category->title }}</td>
                <td>{{ str_limit($post->content, 10, '...') }}</td>
        @empty
          <h1>No posts</h1>
        @endforelse
      </tbody>
    </table>

</section>

@endsection
