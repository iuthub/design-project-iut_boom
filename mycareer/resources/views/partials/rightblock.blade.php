<!--Rightblock panel that represents essential navigation-->
<div class="col-sm-4">
    <a href="#" class="div-href">
      <div class="well background-stat" >
        <img class="stat-icons" src="../images/actual.png" alt="">
        <div class="stat-info">
          <b>    <?php 
           $count = 0;
        foreach($posts as $post){
       
          $count++;
          
        }
        echo $count;
        ?></b>
        </div>
        <div class="stat-title">
          Actual number of available jobs
        </div>
      </div>
    </a>
    <a href="#" class="div-href">
      <div class="well background-stat">
        <img class="stat-icons" src="../images/resume.png" alt="">
        <div class="stat-info">
          <b>15</b>
        </div>
        <div class="stat-title">
          Resumes
        </div>
      </div>
    </a>
    <a href="#" class="div-href">
    <div class="well background-stat">
      <img class="stat-icons" src="../images/companies.png" alt="">
      <div class="stat-info">
       <b> {{count($users)}}</b>
      </div>
      <div class="stat-title">
        Partner companies
      </div>
    </div>
    </a>
</div>
