<!Doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content=""
    
    <title>Admin Dashboard</title>
    
    {!!Html::style('bootstrap/dist/css/bootstrap.min.css')!!}
    {!!Html::style('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')!!}
    {!!Html::style('../plugins/bower_components/toast-master/css/jquery.toast.css')!!}
    {!!Html::style('../plugins/bower_components/morrisjs/morris.css')!!}
    {!!Html::style('../plugins/bower_components/chartist-js/dist/chartist.min.css')!!}
    {!!Html::style('../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')!!}
    {!!Html::style('css/admin/animate.css')!!}
    {!!Html::style('css/admin/style.css')!!}
    {!!Html::style('css/admin/colors/default.css')!!}

</head>

<body class="fix-header">
    
   <div id="wrapper">
    @include('admin.header.header')
    @include('admin.sidebar.sidebar')
  
    @yield('content')
     @include('admin.footer.footer')
</div>
   
   
   
    
</body>
</html>
