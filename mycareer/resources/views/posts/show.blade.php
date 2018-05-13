@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                @if($post->cover_image != 'noimage.jpg')
                <img style="width:300px; height:300px; margin: 20px; border-radius: 5px;"
                 src="/storage/cover_images/{{$post->cover_image}}">
    </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
        <h1 class="jobtitle">{{$post->title}}</h1>
        <div>
                <h2 class="myh2">Requirements</h2>
                {!!$post->description!!}
                <h2 class="myh2">Briefly</h2>
                {!!$post->body!!} 
        </div>
        <hr>
        <small>Created on {{$post->created_at}} by {{$post->user->name}} {{$post->user->lastname}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href = "/posts/{{$post->id}}/edit" class="btn btn default">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close() !!}
            @endif
        @endif
    </div>
</div>
 <div>
    @else
    <div class="container">
     <h1 class="jobtitle">{{$post->title}}</h1>
        <div>
                <h2 class="myh2">Requirements</h2>
                {!!$post->description!!}
                <h2 class="myh2">Briefly</h2>
                {!!$post->body!!} 
        </div>
        <hr>
        <small>Created on {{$post->created_at}} by {{$post->user->name}} {{$post->user->lastname}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $post->user_id)
                <a href = "/posts/{{$post->id}}/edit" class="btn btn default">Edit</a>

                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'POST', 'class'=>'pull-right'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                {!!Form::close() !!}
            @endif
        @endif
 </div>
     </div>
</div>
      @endif
</div>
@endsection  
