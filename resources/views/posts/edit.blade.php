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
            <select class="browser-default custom-select" name="category_id">
                @foreach($categories as $category)
                    <option
                        {{ $category->id === $post->category->id ? 'selected' : '' }}
                        value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Обновить пост</button>
    </form>
@endsection
