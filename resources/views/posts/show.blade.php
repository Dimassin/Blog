@extends('layouts.main')
@section('content')
    <a href="{{ route('posts.index') }}">назад</a>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <a href="{{ route('posts.edit', $post->id) }}">Редактировать</a>
    <form action="{{ route('posts.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit">Удалить</button>
    </form>
@endsection
