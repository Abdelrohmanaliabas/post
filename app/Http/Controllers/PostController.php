<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Http\Services\IPostServices;
use App\Models\User;

class PostController extends Controller
{
    public function __construct(protected IPostServices $postService) {}
    public function index()
    {
        $posts = $this->postService->getAllPosts();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }


    public function create()
    {
        $users = User::all();

        return view('posts.create', [
            'users' => $users
        ]);
    }


    public function store(StorePost $request)
    {
        $data = $request->validated();

        $this->postService->createPost($data);

        return $this->redirectToIndex();
    }


    public function show(string $id)
    {
        $post = $this->postService->getPostById($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }


    public function edit(string $id)
    {
        $post = $this->postService->getPostById($id);

        $users = User::all();

        return view('posts.edit', [
            'post' => $post,
            'users' => $users
        ]);
    }


    public function update(UpdatePost $request, string $id)
    {

        $request->validated();

        $data = $request->all();

        $this->postService->updatePost($id, $data);

        return $this->redirectToIndex();
    }


    public function destroy(string $id)
    {
        $post = $this->postService->getPostById($id);

        $post->delete();

        return $this->redirectToIndex();
    }
    protected function redirectToIndex()
    {
        return redirect()->route('posts.index')->with('success', 'Post successfully saved.');
    }
}