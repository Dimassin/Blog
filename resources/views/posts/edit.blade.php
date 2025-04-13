@extends('layouts.posts.main')
@section('content')
    <a href="{{ route('posts.show', $post->id) }}">назад</a>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <label for="title">Название</label>
        <input type="text" id="title" name="title" value="{{ $post->title }}">
        <label for="description">Описание</label>
        <textarea name="description" id="description">{{ $post->description }}</textarea>
        <button type="submit">Обновить пост</button>
    </form>
@endsection
