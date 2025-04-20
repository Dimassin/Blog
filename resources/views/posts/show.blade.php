@extends('layouts.main')
@section('content')
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->description }}</p>
    <p>{{ $post->category->title }}</p>
    @can('view', auth()->user())
        <a href="{{ route('posts.edit', $post->id) }}">Редактировать</a>
        <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>
    @endcan
@endsection
