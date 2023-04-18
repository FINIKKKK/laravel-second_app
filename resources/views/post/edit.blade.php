@extends('layouts.main')
@section('main')
    <form action="{{ route('post.update', $post->id) }}" method="POST">
        <h2>Edit Post</h2>
        @csrf
        @method('patch')
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image"
                value="{{ $post->image }}">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title"
                value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Content">{{ $post->content }}</textarea>
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
@endsection
