<?php

namespace App\Services;

use App\Models\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class PostService
{
    public function index(): LengthAwarePaginator
    {
        return Post::paginate(10);
    }

    public function store($data): void
    {
        Post::create($data);
    }

    public function update(Post $post, $data): void
    {
        $post->update($data);
    }

    public function delete(Post $post): void
    {
        $post->delete();
    }
}
