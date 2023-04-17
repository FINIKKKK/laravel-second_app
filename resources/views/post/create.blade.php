@extends('layouts.main')
@section('main')
    <form action="/posts" method="POST">
        <h2>Form</h2>
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="text" name="image" class="form-control" id="image" placeholder="Image">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea type="text" name="content" class="form-control" id="content" placeholder="Content"></textarea>
        </div>
        <button class="btn btn-primary">Create</button>
    </form>
@endsection
