@extends('layouts.main')
@section('content')
    <a href="{{ route('posts.show', $post->id) }}">назад</a>
    <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('patch')
        <div class="form-group mb-3">
            <label for="title">Название</label>
            <input class="form-control" type="text" id="title" name="title" value="{{ $post->title }}">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="description">{{ $post->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Обновить пост</button>
    </form>
@endsection
