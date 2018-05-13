    @extends('admin.layouts.layout')
@section('content')
<div id="page-wrapper">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Basic Table</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><a href="home">Dashboard</a></li>
                            <li class="active">Basic Table</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Users' Table</h3>
                            <br>
                            <br>
                            
   <!-- User Table-->
                             <div class="table-responsive">
                                <table id="users_table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Created date</th>
                                           
                                           
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
  <!-- ADMIN TABLE -->

                         <div class="white-box">
                            <h3 class="box-title">Admins' Table</h3>
                            <br>
                            <br>
                            <div align="right">
                                <button type="button"   name="add" id="add_data" class="btn btn-success btn-sm">ADD</button>
                            </div>
                             <div class="table-responsive">
                                <table id="admins_table" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Created date</th>
                                            <th> Action </th>
                                        </tr>
                                    </thead>
                                    
                                </table>
                            </div>
                        </div>
                        <!-- Company -->
                         
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
                  <!-- /#page-wrapper -->
    </div>
        <!-- /#wrapper -->
    <!-- Admin Modal pop-up -->
    <div id="AdminModal" class="modal fade" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form name="register" method="POST" id="Admin_form" action=""  onSubmit="return check(register)" >
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Add Data</h4>   
                        </div>
                        <div class="modal-body">
                             {{csrf_field()}}
                             <span id="form_output"></span>
                             <div class="form-group">
                                <label > Enter First Name</label>
                                <input required="Enter First Name" type="text" name="name" id="name" class="form-control">
                             </div>
                             <div class="form-group">
                                <label > Enter Last Name</label>
                                <input required="Enter Last Name" type="text" name="lastname" id="lastname" class="form-control">
                             </div>
                             <div class="form-group">
                                <label > Email</label>
                                <input required="Enter email" type="text" name="email" id="email" class="form-control">
                             </div>
                             <div class="form-group">
                                <label >Password</label>
                                <input required="Enter password" type="text" name="password" id="password" class="form-control">
                             </div>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="admin_id" id="admin_id" value="" >
                            <input type="hidden" name="button_action" id="button_action" value="insert" >
                            <input type="submit" name="submit" id="action" value="Add" class="btn btn-info" >

                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
                
            </div>
    </div>
    <!-- User's data script -->
     <script type="text/javascript">
                                              $(document).ready(function(){
 
                                             $('#users_table').DataTable({
                                                "processing":true,
                                                "serverSide":true,
                                                "ajax":"{{route('admin.basictable.getUserdata')}}",
                                                "columns":[
                                                {"data":"id"},
                                                {"data":"name"},
                                                {"data":"lastname"},
                                                {"data":"email"},
                                                {"data":"created_at"},
                                                
                                           ]
                                            });
 
});
</script>
    <!--Admin's Data Script-->
                              <script type="text/javascript">
                                            $(document).ready(function(){
                                            $('#admins_table').DataTable({
                                                "processing":true,
                                                "serverSide":true,
                                                "ajax":"{{route('admin.basictable.getAdmindata')}}",
                                                "columns":[
                                                {"data":"id"},
                                                {"data":"name"},
                                                {"data":"lastname"},
                                                {"data":"email"},
                                                {"data":"created_at"},
                                                {data: 'action', name: 'action', orderable: false, searchable: false}
                                           ]
                                            });

 $(document).on('click', '#add_data', function() 
         {
               
               $('#AdminModal').modal('show');
               $('#Admin_form')[0].reset();
               $('#form_output').html('');
               $('#button_action').val('insert');
               $('#action').val('Add').change();


         });
          
         $('#Admin_form').on('submit', function(event) 
        {
            event.preventDefault();

            var form_data=$(this).serialize();
            
           
            $.ajax(
            {
                url:"{{route('admin.basictable.postdata')}}",
                method:"POST",
                data:form_data,
                dataType:"json",
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
               success:function(data)
                {
                  
                          $('#form_output').html(data).success;
                          $('#Admin_form')[0].reset();
                          $('#action').val('Add');
                          $('.modal-title').text('Add Data');
                          $('#button_action').val('insert');
                          $('#users_table').DataTable().ajax.reload(); 

                  
                         
                }


            })

         }); 
         $(document).on('click','.edit', function(){

          
   var id =$(this).attr("id"); 
   
   $.ajax({
     url:"{{route('admin.basictable.fetchdata')}}",
     
     method:'get',
     data:{id:id},
     dataType:'json',

     success:function(data)
     {  
        
        $('#name').val(data.name);
        $('#lastname').val(data.lastname);
        $('#admin_id').val(id);
        $('#email').val(data.email);
        $('#password').val(data.password);
        $('#AdminModal').modal('show'); 
        $('#action').val('Edit');
        $('.modal-title').text('Edit Data'); 
        $('#button_action').val('update');
       
     }
   })
   
});  
                                        
                                             
         
     });

                                        </script>

    <script>
  function check(myform){


    var regex = /^[a-zA-Z]+$/;
    var regexmail=/^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;
    var regexpass=/^(?=.*[\d])(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*])[\w!@#$%^&*]{8,}$/;
    var check=true;

//RegEx validation
  


 if (register.name.value == "" || register.name.value == null)
 { 
   
   document.getElementById("name").placeholder="This is required field";  
   document.getElementById("name").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("name").style.borderColor="red";  
  check=false;
 }
 else{
    document.getElementById("name").style.borderColor=null;
 }
 if(register.lastname.value == "" || register.lastname.value == null){
    document.getElementById("lastname").placeholder="This is required field";  
   document.getElementById("lastname").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("lastname").style.borderColor="red";
  check=false;
 }
 else{
    document.getElementById("lastname").style.borderColor=null;
 }
 if(register.email.value == "" || register.email.value == null){
    document.getElementById("email").placeholder="This is required field";  
   document.getElementById("email").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("email").style.borderColor="red";
   check=false;
 }
else{
    document.getElementById("email").style.borderColor=null;
}
if(register.password.value == "" || register.password.value == null){
    document.getElementById("password").placeholder="This is required field";  
   document.getElementById("password").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("password").style.borderColor="red";
check=false;
 }
else{
    document.getElementById("password").style.borderColor=null;
}




    if(regex.test(register.name.value)==false){
        document.getElementById("name").value="";
   document.getElementById("name").placeholder="Invalid Input";  
   document.getElementById("name").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("name").style.borderColor="red"; 
   check=false;
   
 }else{
    document.getElementById("name").style.borderColor=null;
 }
 
  if(regex.test(register.lastname.value)==false){
        document.getElementById("lastname").value="";
   document.getElementById("lastname").placeholder="Invalid Input";  
   document.getElementById("lastname").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("lastname").style.borderColor="red";  
   check=false;
 }else{
    document.getElementById("lastname").style.borderColor=null;
 }
 
  if(regexmail.test(register.email.value)==false){
        document.getElementById("email").value="";
   document.getElementById("email").placeholder="Invalid Input";  
   document.getElementById("email").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("email").style.borderColor="red";  
 check=false;
 }else{
    document.getElementById("email").style.borderColor=null;
}
if(regexpass.test(register.password.value)==false){
        document.getElementById("password").value="";
   document.getElementById("password").placeholder="Invalid Input";  
   document.getElementById("password").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("password").style.borderColor="red"; 
   alert("Passwords must be \n * - At least 8 characters long, max length anything\n * - Include at least 1 lowercase letter\n *- 1 capital letter\n * - 1 number\n * - 1 special character => !@#$%^&*") 
 check=false;
 }else{
    document.getElementById("password").style.borderColor=null;
}

return check;
 }
 

 
  </script>
    
    
   
    <script src="{{asset('../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
   
    
    <script src="{{asset('js/admin/jquery.slimscroll.js')}}"></script>
    
    <script src="{{asset('js/admin/waves.js')}}"></script>
    <script src="{{asset('js/admin/custom.min.js')}}"></script>

@endsection