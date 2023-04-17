@extends('layouts.main')
@section('main')
    <div>{{ $post->id }}. {{ $post->title }}</div>
    <div>{{ $post->content }}</div>
@endsection
