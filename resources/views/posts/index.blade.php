@extends('layouts.main')
@section('content')
    <a href="{{ route('posts.create') }}">Добавить пост</a>
    <ul>
        @foreach($paginatedPosts->items() as $post)
            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

    <div>
        {{ $paginatedPosts->links() }}
    </div>
@endsection
