@extends('layouts.postsLayout')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter post title">
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="Enter post content">
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Author</label>
            <select class="form-select" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">
            Create Post
        </button>

        <a href="{{ route('posts.index') }}" class="btn btn-danger">
            Cancel
        </a>
    </form>
@endsection