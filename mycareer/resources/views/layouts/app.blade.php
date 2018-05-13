<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/userInterface/mystyle.css')}}">
    <link rel="stylesheet" href="{{asset('css/userInterface/form_style.css')}}">
    <link rel="stylesheet" href="{{asset('css/userInterface/listview.css')}}">
  <link rel="stylesheet" href="{{asset('css/userInterface/jobstyle.css')}}">
    
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')!!}
    {!!Html::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css')!!}
    {!!Html::style('css/userInterface/Footer-with-social-icons.css')!!}
    {!!Html::style('css/userInterface/mystyle.css')!!}
    {!!Html::style('css/userInterface/listview.css')!!}

    <style>
         .carousel-inner img {
          width: 100%; /* Set width to 100% */
          min-height: 200px;
        }
    
        /* Hide the carousel text when the screen is less than 600 pixels wide */
        @media (max-width: 600px) {
          .carousel-caption {
            display: none; 
          }
        }
        @media only screen and (max-width: 600px){
          .icon-bar{
            display: none;
          }
          .mynavbar{
            margin-bottom: 0px;
        }   
    }
    </style>
    
</head>
<body id ="boddy">
    <div id="app">
       @include('inc.navbar')
       @include('inc.messages')
       @yield('content')

  
    @include('inc.footer')
    <!-- Scripts -->
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
    <script src="{{asset('js/myscript.js')}}"></script>
    <script src="{{asset('js/modal.js')}}"></script>
    <script src="{{asset('js/mymap.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/4.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBWVM9nc273Dt67mP3faBjJfN2i1YEEkUA&callback=initMap"></script>
  </div>
</body>
</html>
