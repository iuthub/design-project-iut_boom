@extends('layouts.app')

@section('content')
<div class=" fluid2">
<div class="image-container">
        <img class="img-responsive" src="../images/about_us.jpg" alt="BCG PHOTO">
        <div class="text-secondary">Build your future with us!</div>
</div>
<form  action="mailto:sukhrob@mail.ru" method="get">

  <div class="container-fluid" style="background-color: #252525">
    <div class="container">
      <div class="formBox">
        <form action="">
          <div class="row">
            <div class="col-sm-12">
              <h1 id="contact_us_header">Contact Us</h1>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">First Name</div>
                    <input type="text2" name="fname:" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Last Name</div>
                    <input type="text2" name="lname:" class="input">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Email</div>
                    <input type="text2" name="email:" class="input">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="inputBox">
                  <div class="inputText">Phone Number</div>
                    <input type="text2" name="phNumber:" class="input">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div class="inputBox">
                  <div class="inputText">Message</div>
                    <textarea class="input" name="message:"></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12"> 
                <input type="submit" value="Send Message" class="button">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</form>
<div id="map">
</div>
</div>
@endsection


  

