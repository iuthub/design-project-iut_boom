@extends('layouts.app')

@section('content')
<div class="container">
      <!--Social Accounts-->
      @include('partials.socaccaunts')
      <!--Carousel container-->
      <div class="container-bckg">
          <div class="container">
              <div class="row">
                @include('partials.carousel', array('slides'=>DB::table('posts')->get()))
                <!--Rightblock panel-->
                @include('partials.rightblock')
              </div>
            <hr>
          </div>
      </div>
      <!--Categories panel-->
      @include('partials.categories')
     
</div>
@endsection
