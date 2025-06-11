@extends('layouts.postsLayout')

@section('content')
    <center>
        <button type="button" class="btn btn-success" onclick="window.location='{{ route('posts.create') }}'">
            Create new post
        </button>
    </center>

    <table class="table m-5">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted by</th>
                <th scope="col">Created at</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->user->name ?? 'N/A' }}</td>
                    <td>{{ $post->created_at->format('Y-m-d H:i') }}</td>
                    <td>
                        <div class="d-flex gap-1">
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure?');" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>
@endsection