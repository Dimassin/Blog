<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\IndexRequest;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends BaseController
{
    public function index(IndexRequest $request): View
    {
        return view('posts.index', [
            'paginatedPosts' => $this->service->index($request->validated()),
            'categories' => Category::all(),
        ]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function create(): View
    {
        return view('posts.create', [
            'categories' => Category::all(),
        ]);
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        return redirect()->route('posts.index')->with('message', 'Пост успешно создан');
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', [
            'post' => $post,
            'categories' => Category::all(),
        ]);
    }

    public function update(Post $post, UpdateRequest $request): RedirectResponse
    {
        $this->service->update($post, $request->validated());

        return redirect()->route('posts.show', $post->id)->with('message', 'Пост успешно обновлён');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $this->service->delete($post);

        return redirect()->route('posts.index')->with('message', 'Пост успешно удалён');
    }
}
