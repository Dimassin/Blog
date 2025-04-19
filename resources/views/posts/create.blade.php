@extends('layouts.main')
@section('content')
    <a href="{{ route('posts.index') }}">назад</a>
    <form action="{{ route('posts.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Название</label>
            <input class="form-control" type="text" id="title" name="title">
            <label for="description">Описание</label>
            <textarea class="form-control" name="description" id="description"></textarea>
            <select class="browser-default custom-select" name="category_id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Создать пост</button>
    </form>
@endsection
