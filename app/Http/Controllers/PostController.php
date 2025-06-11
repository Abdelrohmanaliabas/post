<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePost;
use App\Http\Requests\UpdatePost;
use App\Models\User;
use App\PostTrait;

class PostController extends Controller
{
    use PostTrait;

    public function index()
    {
        $posts = $this->getAllposts();

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

        $this->createPost($data);

        return $this->redirectToIndex();
    }


    public function show(string $id)
    {
        $post = $this->getPostById($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }


    public function edit(string $id)
    {
        $post = $this->getPostById($id);

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

        $this->updatePost($id, $data);

        return $this->redirectToIndex();
    }


    public function destroy(string $id)
    {
        $post = $this->getPostById($id);

        $post->delete();

        return $this->redirectToIndex();
    }
}
