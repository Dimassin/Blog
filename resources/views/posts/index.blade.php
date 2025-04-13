@extends('layouts.posts.main')
@section('content')
    <a href="{{ route('posts.create') }}">Добавить пост</a>
    <ul>
        @foreach($posts as $post)
            <li><a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>
@endsection
