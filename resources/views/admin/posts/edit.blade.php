@extends('layouts.app')

@section('content')
    @error('message')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <form action="{{route('admin.posts.update', $post)}}" method="post">
        @csrf
        @method('PUT')

        <label for="image">Image</label>
        <input type="text" name="image" id="image" value="{{$post->image}}">

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{$post->title}}">

        <label for="description">Description</label>
        <input type="text" name="description" id="description" value="{{$post->description}}">

        <label for="text">Text</label>
        <input type="text" name="text" id="text" value="{{$post->text}}">

        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="{{$post->author}}">

        <input type="submit" value="Invia">
    </form>
@endsection