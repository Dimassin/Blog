@extends('layouts.main')
@section('content')
    <div class="d-flex flex-column gap-3">
        <select
            class="browser-default custom-select w-100"
            style="max-width: 800px"
            name="category_id"
            onchange="window.location.href = '{{ request()->url() }}?category=' + this.value"
        >
            <option value="0">Все</option>
            @foreach($categories as $category)
                <option
                    value="{{ $category->id }}"
                    {{ (int)request('category') === $category->id ? 'selected' : '' }}
                >
                    {{ $category->title }}
                </option>
            @endforeach
        </select>
        @foreach($paginatedPosts->items() as $post)
            <div class="card mb-3 w-100" style="max-width: 800px">
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
