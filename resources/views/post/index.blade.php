@extends('layouts.main')
@section('main')
    <div class="h4">Posts:</div>
    @foreach ($posts as $post)
        <li>{{ $post->id }}.
            <a href="{{ route('post.show', $post->id) }}"> {{ $post->title }}</a>
        </li>
    @endforeach
@endsection
