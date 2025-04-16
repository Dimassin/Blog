<?php

namespace App\Http\Controllers;

use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends BaseController
{
    public function index(): View
    {
        $paginatedPosts = $this->service->index();

        return view('posts.index', compact('paginatedPosts'));
    }

    public function show(Post $post): View
    {
        return view('posts.show', compact('post'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(StoreRequest $request): RedirectResponse
    {
        $this->service->store($request->validated());

        return redirect()->route('posts.index')->with('message', 'Пост успешно создан');
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', compact('post'));
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
