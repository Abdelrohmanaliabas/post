<?php

namespace App\Http\Services;

interface IPostServices
{
    public function getAllPosts();
    public function getPostById(string $id);
    public function createPost(array $data);
    public function updatePost(string $id, array $data);
    public function deletePost(string $id);
}