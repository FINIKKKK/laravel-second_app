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
        <div class="mb-3">
            <label for="title" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    <option {{ $category->id === $post->category_id ? 'selected' : '' }} value="{{ $category->id }}">
                        {{ $category->title }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tags</label>
            <select class="form-select" multiple name="tags[]">
                @foreach ($tags as $tag)
                    <option
                        @foreach ($post->tags as $post_tag)
                    {{ $tag->id === $post_tag->id ? 'selected' : '' }} @endforeach
                        value="{{ $tag->id }}">
                        {{ $tag->title }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-primary">Edit</button>
    </form>
@endsection
