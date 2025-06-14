<?php

namespace App\Http\Services;

use App\Models\Post;

class PostServices implements IPostServices
{


    public function getAllPosts()
    {
        return Post::orderBy('created_at', 'desc')->paginate(10);
    }


    public function getPostById(string $id)
    {
        return Post::findOrFail($id);
    }

    public function createPost(array $data)
    {
        return Post::create($data);
    }

    public function updatePost(string $id, array $data)
    {
        $post = $this->getPostById($id);
        $post->update($data);
        return $post;
    }

    public function deletePost(string $id)
    {
        $post = $this->getPostById($id);
        return $post->delete();
    }
}