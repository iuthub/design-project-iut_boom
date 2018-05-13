@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=> 'POST', 'enctype' =>'multipart/form-data']) !!}
    <div class = "form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class = "form-group">
            {{Form::label('description', 'Job Description/Requirements')}}
            {{Form::text('description', $post->description, ['class'=> 'form-control', 'placeholder' => 'Please short include description and requirements of the job...'])}}
    </div>
    <div class = "form-group">
            {{Form::label('body', 'Job Description/Requirements')}}
            {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor','class'=> 'form-control', 'placeholder' => 'Describe briefly the job and the company...'])}}
    </div>
    <div class ="form-group">
                {{Form::file('cover_image')}}
    </div>
    {{ Form::hidden('_method', 'PUT')}}
    {{ Form::submit('Submit', ['class'=> 'btn btn-primary'])}} 
    {!! Form::close() !!}
@endsection  
