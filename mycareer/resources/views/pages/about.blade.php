@extends('layouts.app')

@section('content')
<div class="container">
<main role="main">
          <div>
            <h2>Our goal</<h2>
            <p id="our_goal">MyCareer is a local, end-to-end human capital solutions company that helps people find jobs and hundreds of thousands of employers to find, hire and manage the great talent they need. It’s what we've done for over a year and we do it better than anyone else. By combining advertising, software and services, we're able to lead the industry in recruiting solutions, employment screening and human capital management. 
            MyCareer is run by people whose names mentioned below.</p>
         
         
   <div class="row">
          <div class="col-lg-12">
            <h2 class="my-4 text-center">Our Team</h2><br/>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="img-circle img-fluid d-block mx-auto our-photo" src="images/us/shohjahon.jpg" alt="">
            <h3>Shokhjakhon Nishonov<br/>
              <small>Front-End</small>
            </h3>
            <p id="desc">High spirited and creative 19 y.o designer. Likes swimming, footbal, games</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="img-circle img-fluid d-block mx-auto our-photo" src="images/us/abubakr.jpg" alt="">
            <h3>Abu-Bakr Jabbarov<br/>
              <small>Front-End</small>
            </h3>
            <p id="desc">Likes simplicity (black & white), 21 y.o front-end developer!</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="img-circle img-fluid d-block mx-auto our-photo" src="images/us/suhrob.jpg" alt="">
            <h3>Sukhrobjon Kurbonov<br/>
              <small>Back-End(PHP, Laravel)</small>
            </h3>
            <p id="desc">Brain of the project! Good at logical thinking</p><br/>
          </div>
          <div class="col-lg-2 col-sm-0 text-center mb-2"></div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="img-circle img-fluid d-block mx-auto our-photo" src="images/us/navruz.jpg" alt="">
            <h3>Navruzbek Noraliyev<br/>
              <small>Back-End(PHP, Laravel)</small>
            </h3>
            <p id="desc">One of the most essential member of the team. Creative developer!</p>
          </div>
          <div class="col-lg-4 col-sm-6 text-center mb-4">
            <img class="img-circle img-fluid d-block mx-auto our-photo" src="images/us/sarvar.jpg" alt="">
            <h3>Sarvarkhon Khujaev<br/>
              <small>Front End</small>
            </h3>
            <p id="desc">Anonymous member!  No description</p>
          </div>
          <div class="col-lg-2 col-sm-0 text-center mb-2"></div>
          
        </div>
  
      </main>
  
  <div id="modal-wrapper" class="modal"> 
      <form action="" class="modal-content animate">
        <div class="imgcontainer">
          <h1 id="popup_title">Registration Form</h1>
          <span class="close">&times;</span>
        </div>
        <div class="modal-container">
          <input type="text" placeholder="First Name" name="fname">
          <input type="text" placeholder="Second Name" name="sname">
          <input type="text" placeholder="E-Mail" name="email">
          <input type="text" placeholder="password" name="password">
        </div>
      </form>
    </div>
  
    </div>
  @endsection
