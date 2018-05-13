@extends('layouts.loginLayout')
@section('content')
		
	<div class=container style="position: relative;">
	<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		 <form name="register" method="POST" action="{{ route('register') }}" onSubmit="return check(register)" >
		 	    @csrf
			<fieldset>
				<h2>Please Register</h2>
				<hr class="colorgraph">
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                     <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Your Name" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-bullhorn"></i></span>
                      <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" placeholder="Lastname" name="lastname" value="{{ old('lastname') }}" autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
				</div>


				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Your Email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
				</div>
				
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" name="password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
				</div>
				<div class="input-group">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" >
				</div>
				
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
                       <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
					
				</div>
			</fieldset>
		</form>
	</div>
</div>
</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
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
if(register.password.value!=register.password_confirmation.value){
  document.getElementById("password-confirm").value="";
   document.getElementById("password-confirm").placeholder="Passwords do not match";  
   document.getElementById("password-confirm").setAttribute("style", "input::placeholder{color: red;}");
   document.getElementById("password-confirm").style.borderColor="red";
   check=false;
}
return check;
 }
 

 
  </script>

@endsection
