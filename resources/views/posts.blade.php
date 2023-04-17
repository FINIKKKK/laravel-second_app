@extends('layouts.main')
@section('main')
    @foreach ($posts as $post)
        <div>{{ $post->title }}</div>
        <div>{{ $post->content }}</div>
        <div>{{ $post->likes }}</div>
    @endforeach
@endsection
