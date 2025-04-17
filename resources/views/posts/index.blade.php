@extends('layouts.main')
@section('content')
    <a href="{{ route('posts.create') }}">Добавить пост</a>
    <div>
        @foreach($paginatedPosts->items() as $post)
            <div class="card mb-3 w-100 w-md-50 w-lg-25">
{{--                <img src="https://image.winudf.com/v2/image/bW9iaS5hbmRyb2FwcC5wcm9zcGVyaXR5YXBwcy5jNTExMV9zY3JlZW5fN18xNTI0MDQxMDUwXzAyMQ/screen-7.jpg?fakeurl=1&type=.jpg" class="card-img-top" alt="Новость">--}}
                <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text text-truncate">{{ $post->title }}</p>
                    <p class="card-text text-truncate">{{ $post->description }}</p>
                    <a class="btn btn-primary" href="{{ route('posts.show', $post->id) }}">Читать далее</a>
                </div>
            </div>
        @endforeach
    </div>
    <div>
        {{ $paginatedPosts->links() }}
    </div>
@endsection
