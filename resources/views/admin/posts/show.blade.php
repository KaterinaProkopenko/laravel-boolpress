@extends('layouts.app')

@section('content')
    <div class="my-card-secondary py-4 d-inline-block">
        <div class="row g-0">
            <div class="col-12 text-center position-relative mx-5">
                <div class="position-absolute start-0">
                    <a href="{{route('admin.posts.index')}}"><-</a>
                </div>
                @if (str_starts_with($post->image, 'https://') || str_starts_with($post->image, 'http://'))
                    <img src="{{$post->image}}" class="img-fluid rounded-start mb-2" alt="Current image">
                @else
                    <img src="{{asset('storage/' . $post->image)}}" class="img-fluid rounded-start mb-2" alt="Current image">
                @endif
            </div>
            <div class="col-8 mx-auto">
                <div class="card-body">
                    <h2 class="card-title text-center">{{$post->title}}</h5>
                    {{-- <a href="{{route("admin.posts.show", $post)}}" type="button" class="btn btn-outline-primary"></a> --}}
                    <p class="card-text fs-4">{{$post->description}}</p>
                    <p class="card-text fs-5">{{$post->text}}</p>
                    <p class="card-text fs-5"><small class="text-muted">Author: {{$post->author}}</small></p>
                    <p class="card-text fs-5"><small class="text-muted">Vote: {{$post->vote}}</small></p>
  {{--                   <h5>Categories:</h5>
                    <p style="background-color: {{$category->color}}">{{$category->category}}</p> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @dump($category->category) --}}
