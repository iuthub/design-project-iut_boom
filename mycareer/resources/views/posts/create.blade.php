@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method'=> 'POST', 'enctype' =>'multipart/form-data']) !!}
    <div class = "form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', '', ['class'=> 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class ="form-group">
            {{Form::label('description', 'Requirements')}}
            {{Form::text('description', '', ['class'=> 'form-control', 'placeholder' => 'Please include short description and requirements of the job...'])}}
    </div>
    <div class = "form-group">
        {{Form::label('body', 'Job Description')}}
        {{Form::textarea('body', '', ['id'=>'article-ckeditor','class'=> 'form-control', 'placeholder' => 'Describe briefly the job and the company...'])}}
    </div>
    <div class ="form-group">
         {{Form::file('cover_image')}}
    </div>

    <!-- DROPDOWN-->
<div class="row" style="display: inline-block;">
<select name = "cat_id">
  <option value="1">Trade & Commerce</option>
  <option value="4">Transport & logistic</option>
  <option value="5">Construction</option>
  <option value="6">Bars & Restaurants</option>
  <option value="7">Accountancy & Finance</option>
  <option value="8">Security & Protection</option>
  <option value="9">Beauty & Fitness</option>
  <option value="10">Tourism & Entertainment</option>
  <option value="11">Education</option>
  <option value="12">Art & culture</option>
  <option value="14">IT & Telecommunication</option>
  <option value="13">Medicine & Pharmacy</option>
  <option value="16">Marketing & Design</option>
  <option value="17">Production</option>
  <option value="18">Internship</option>
  <option value="19">Others</option>
</select> 
    <div class ="form-group" style="display: inline-block; margin-left: 15px;">
    </div>
   
</div>
 {{ Form::submit('Submit', ['class'=> 'btn btn-primary'])}} 
    {!! Form::close() !!}
</div>
</div>
    <br>

@endsection  
