@extends('admin.layouts.layout')
@section('content')
 <div id="page-wrapper">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                       
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Visit</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">659</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Total Page Views</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">869</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Unique Visitor</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">911</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                <!--row -->
                <!-- /.row -->
                
                <!-- ============================================================== -->
                <!-- table -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="white-box">
                            <div class="col-md-3 col-sm-4 col-xs-6 pull-right">
                                
                            </div>
                            <h3 class="box-title">Recent POSTS</h3>
                            <div class="table-responsive">
                                <table id="post_table" class="table table-bordered" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>TITLE</th>
                                            <th>BODY</th>
                                            <th>DESCRIPTION</th>
                                            <th>USER ID</th>
                                            <th>DATE</th>
                                            <th>IMAGE</th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                    <!-- /.col -->
                </div>
            </div>
            <!-- /.container-fluid -->
          
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
     <script type="text/javascript">
                                              $(document).ready(function(){
 
                                             $('#post_table').DataTable({
                                                "processing":true,
                                                "serverSide":true,
                                                "ajax":"{{route('admin.home.getposts')}}",
                                                "columns":[
                                                {"data":"id"},
                                                {"data":"title"},
                                                {"data":"body"},
                                                {"data":"description"},
                                                {"data":"user_id"},
                                                {"data":"created_at"},
                                                {"data":"cover_image"}
                                                ]
                                               
                                            });
                                         });
                                        </script>
     <script src="{{asset('../plugins/bower_components/jquery/dist/jquery.min.js')}}"> </script>
    <script src="{{asset('trap/dist/js/bootstrap.min.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"> </script>
    <script src="{{asset('js/admin/jquery.slimscroll.js')}}"> </script>
    <script src="{{asset('js/admin/waves.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/counterup/jquery.counterup.min.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/chartist-js/dist/chartist.min.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"> </script>
    <script src="{{asset('../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"> </script>
    <script src="{{asset('js/admin/custom.min.js')}}"> </script>
    <script src="{{asset('js/admin/dashboard1.js')}}"> </script>
    
     <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  
    @endsection
