@extends('layouts.index')

@section('content')

<div class="grip1440">
    <div class="card-container">
        <h1>Create New Blog</h1> <br>

        <form action="{{ url('/blogs') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="blogs-title">Blog Title</label><br>
            <input type="text" name="title" id="blogs-title" placeholder="Enter the blog title" required> <br>

            <label for="blogs-description">Blog Description</label><br>
            <input type="text" name="description" id="blogs-description" placeholder="Enter the blog description" required> <br>

            <label for="blogs-choose-image">Blog Image</label><br>
            <input type="file" name="imagePath" id="blogs-choose-image"> <br>

            <div class="btnn">
                <input type="submit" value="Publish Blog" class="btn ">
            </div>
            @if(count($errors)>0)
            <div class="alert alert-danger">
                <strong>Whoops! there ara problems in uploading image</strong>

                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <strong>{{$message}}</strong>
            </div>
            <img src="images/{{Session::get('image_name')}}" width="300" height="200" alt="">
            @endif
        </form>
    </div>
</div>

@endsection