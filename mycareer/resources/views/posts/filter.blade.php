@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
        @if(count($posts->cat_id)>0)
            @foreach($posts as $post)
            <div class="row">
            <div class="container listview">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <img class="header-image" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row row-listview">
                    <h2 ckass="title-lv"><a class="a-lv">{{$post->title}}</a></h2>
                    <div class="company-lv">
                        <img src="images/bank-building.png" class="icon-job" alt=""> Created on{{$post->created_at}} by {{$post->user->name}}
                    </div>     
                </div>
                <div class="row row-lv-description">
                        {{$post->description}}
                </div> 
            </div>
                <div class="row">
                    <div class="button-more">
                        <div class="col-sm-9 col-xs-12"></div>
                            <div class="col-sm-3 col-xs-12">
                                <a class="more-btn" href="/posts/{{$post->id}}">See more</a>
                            </div>
                    
                    </div>
                </div>
            </div>
        </div>           
    @endforeach
    {{$posts->links()}}
    @else
            <p>No posts found</p>
        @endif
@endsection  
