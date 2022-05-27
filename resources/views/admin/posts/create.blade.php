@extends('layouts.app')

@section('content')
    @error('message')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <form action="{{route('admin.posts.store')}}" method="post">
        @csrf

        <label for="image">Image</label>
        <input type="text" name="image" id="image">

        <label for="title">Title</label>
        <input type="text" name="title" id="title">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="text">Text</label>
        <input type="text" name="text" id="text">

        <label for="author">Author</label>
        <input type="text" name="author" id="author">

        <input type="submit" value="Invia">
    </form>
@endsection