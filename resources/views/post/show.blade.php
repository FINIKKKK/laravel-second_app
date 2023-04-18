@extends('layouts.main')
@section('main')
    <a href="/posts">Back</a>
    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>

    <a href="{{ route('post.edit', $post->id) }}" class="btn btn-secondary mt-3">Edit</a>
    <form action="{{ route('post.destroy', $post->id) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn btn-danger mt-3">Delete</button>
    </form>
@endsection
