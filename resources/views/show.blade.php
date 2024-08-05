@extends('/layouts/index')


@section('content')



<div class="show-container " style="margin-top:10%;">
    <div class="show">
        <div class="image">
            <img src="/img/{{$blogData->imagePath}}" alt="">
        </div>
        <div class="show-content">
            <h1 class="show-title" value='sdvsdvsd'>{{$blogData->title}}</h1>
            <p class="show-description">{{$blogData->description}}</p>
        </div>
    </div>
    <div class="button-container">

        <form action="/blogs/{{$blogData->id}}" method="POST">
            @CSRF
            @method('DELETE')
            <input type="submit" value="Delete blog" name="delete" >
        </form>

        <form action="/blogs/{{$blogData->id}}/edit" method="GET">
            <input type="submit" value="Edit Blog" name="submit" >
        </form>
    </div>
</div>




@stop