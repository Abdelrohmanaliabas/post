@extends('layouts.postsLayout')
@section('content')

    <div class="container mt-5">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p><strong>Posted by:</strong> {{ $post->user->name }}</p>
        <p><strong>Created at:</strong> {{ $post->created_at->format('Y-m-d H:i:s') }}</p>

        <div class="mt-4">
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to Posts</a>
        </div>
    </div>

@endsection