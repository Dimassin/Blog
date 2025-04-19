<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PostService
{
    public function index(array $data): LengthAwarePaginator
    {
        return Post::query()
            ->when($data['category'] ?? 0, function ($query, $categoryId) {
                $query->where('category_id', $categoryId);
            })
            ->orderBy('id', 'desc')
            ->paginate(10)
            ->withQueryString();
    }

    public function store(array $data): void
    {
        Post::create($data);
    }

    public function update(Post $post, array $data): void
    {
        $post->update($data);
    }

    public function delete(Post $post): void
    {
        $post->delete();
    }
}
