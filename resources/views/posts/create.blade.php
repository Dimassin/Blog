@extends('layouts.posts.main')
@section('content')
    <a href="{{ route('posts.index') }}">назад</a>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <label for="title">Название</label>
        <input type="text" id="title" name="title">
        <label for="description">Описание</label>
        <textarea name="description" id="description"></textarea>
        <button type="submit">Создать пост</button>
    </form>
@endsection
