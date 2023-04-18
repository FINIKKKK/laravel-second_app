@extends('layouts.main')
@section('main')
    <a href="/posts">Back</a>
    <div>ID: {{ $post->id }}</div>
    <div>Title: {{ $post->title }}</div>
    <div>Content: {{ $post->content }}</div>
    <div>Image: {{ $post->image }}</div>
    <div>Category_ID: {{ $post->category_id }}</div>
    {{-- <div>Tags: {{ $post->tags }}</div> --}}

    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary mt-3">Edit</a>
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger mt-3">Delete</button>
    </form>
@endsection
