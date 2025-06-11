<?php

namespace App;

use App\Models\Post;

trait PostTrait
{
    public function getAllposts()
    {
        return Post::with('user')->paginate(10);
    }

    public function getPostById($id)
    {
        return Post::findOrFail($id);
    }

    public function createPost($data)
    {
        return Post::create($data);
    }
    public function updatePost($id, $data)
    {
        $post = $this->getPostById($id);
        $post->update($data);
        return $post;
    }

    public function redirectToIndex()
    {
        return redirect()->route('posts.index');
    }
}
