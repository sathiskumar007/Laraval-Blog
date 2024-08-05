@extends('layouts.index')

@section('content')

<div class="main-edit">
    <div class="edit-container" style="margin-bottom: 100px;">
        <h2>Edit the blog</h2>

        <form action="/blogs/{{ $blogData->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <label for="edit-title">Blog Title</label>
            <input type="text" name="title" id="edit-title" placeholder="Enter the blog title" value="{{ $blogData->title }}"> <br><br>

            <label for="edit-description">Blog Description</label>
            <input type="text" name="description" id="edit-description" placeholder="Enter the blog description" value="{{ $blogData->description }}"> <br>

            <label for="edit-choose-image">Blog Image</label>
            <input type="file" name="imagePath" id="edit-choose-image"> <br>

            <input type="submit" value="Update Blog" class="btn btn-primary">
        </form>
    </div>
</div>

@stop
