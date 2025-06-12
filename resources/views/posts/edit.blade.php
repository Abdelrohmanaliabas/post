<x-app-layout>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Post Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title     }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <input type="text" class="form-control" id="content" name="content" value="{{ $post->content }}" required>
        </div>

        <div class="mb-3">
            <label for="user_id" class="form-label">Author</label>
            <select class="form-select" id="user_id" name="user_id">
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $user->id == $post->user_id ? 'selected' : '' }}>
                        {{ $user->name }}
                    </option>
                @endforeach
            </select>

        </div>

        <button type="submit" class="btn btn-success">
            edit Post
        </button>

        <a href="{{ route('posts.index') }}" class="btn btn-danger">
            Cancel
        </a>
    </form>
</x-app-layout>