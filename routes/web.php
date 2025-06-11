<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');
Route::get('/posts/{id}', function ($id) {

    return view('posts.show');
})->name('posts.show');
Route::get('/posts/create', function () {
    return view('posts.create');
})->name('posts.create');
Route::get('/posts/edit', function () {
    return view('posts.edit');
})->name('posts.edit');
Route::delete('/posts/delete', function () {
    // Logic to delete the post with the given ID
    return redirect()->route('posts.index');
})->name('posts.delete');
