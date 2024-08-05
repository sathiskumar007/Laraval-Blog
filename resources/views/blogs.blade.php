@extends('layouts.index')

@section('content')
<div class="blogs-container"><br>
    <h1>Blogs</h1>

    <div class="blog-card-container d-flex flex-wrap gap-5">
        @foreach($blog as $blogData)
        <a href="/blogs/{{$blogData->id}}">
            <div class="blogs-card">
                <div class="blogs-image">
                    <img src="{{ asset('images/' . $blogData->imagePath) }}" alt="blog-image" class="blogs-card-image">
                </div>
                <div class="blog-content">
                    <h2 class="blogs-title fs-2">{{$blogData->title}}</h2>
                    <p class="blogs-description text-decoration-none">{{$blogData->description}}</p>
                </div>
            </div>
        </a>
        @endforeach
    </div><br>
    <a class="btn" href='/blogs/blogsCreate' style="width: 10%;padding-left: 15px; text-align: center">Create new blog Post</a>
</div>
@stop
