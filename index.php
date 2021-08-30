<?php 
$connection=TRUE;
include 'include/dbconfig';
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title><?php echo htmlentities($orgname) ;?></title>
     <link href="<?php echo htmlentities($logo) ;?>" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" href="content/bootstrap.css"/>
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body>
<?php
  //include 'include/dbconfig';
  include 'include/header';
?>

<div class="container">
   <div class="row">
     
        <div class="col-lg-12">
         
        <div id="carousel-example-generic2" class="carousel carousel-fade" data-ride="carousel" data-interval="8000" data-pause="null" >

  <!-- Indicators--> 
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="assets/images/slider_1.jpg" alt="...">
      <div class="carousel-caption">
      <p>
           <a href="apply/" class="btn btn-primary btn-lg">Apply now &raquo;</a>

      </p>
      </div>
    </div>
    <div class="item">
      <img src="assets/images/slider_3.jpg" alt="...">
      <div class="carousel-caption">
      <p>
           <a href="apply/" class="btn btn-primary btn-lg">Apply now &raquo;</a>

      </p>
       
      </div>
    </div>

       <div class="item">
      <img src="assets/images/slider_1.jpg" alt="...">
      <div class="carousel-caption">
      <p>
           <a href="apply/" class="btn btn-primary btn-lg">Apply now &raquo;</a>

      </p>

      </div>
    </div>
      <div class="item">
      <img src="assets/images/slider_3.jpg" alt="...">
      <div class="carousel-caption">
      <p>
           <a href="apply/" class="btn btn-primary btn-lg">Apply now &raquo;</a>

      </p>

      </div>
    </div>
      </div>
    

</div>
 
      
    
      </div>
            
       </div>
        <!--  </div> -->
       

    <div class="col-md-12" align="center"><h1>Admissions</h1></div>
        
    <div class="col-md-4">
            <h2>Undergraduate</h2>
            <p>
                For undergraduate admissions, first visit the JAMB CAPS platform to set UAT as your first choice and wait for a decision on your admission. Once you have accepted our admission offer, 
                return here to create your account and begin the onboarding process.</p>
            <p><a class="btn btn-primary btn-lg" href="apply/">Start Now &raquo;</a>
                
            </p>
        </div>
        <div class="col-md-4">
            <h2>JUPEB</h2>
            <p>
                Candidates looking for a richer foundation experience can enrol for the nine-month JUPEB programme. Graduands from the programme are eligible for diret entry undergraduate admission at 200 level in UAT and other universities in Nigeria. Enrol now.</p>
            <p><a class="btn btn-primary btn-lg" href="apply/">Enrol Now &raquo;</a>
                
            </p>
        </div>
        <div class="col-md-4">
            <h2>Foundation</h2>
            <p>
                Build a solid foundation for your educational pursuits by undertaking the rigorous one-year Foundation programme at UAT. The programme provides comprehensive preparation for JAMB&#39;s UTME examinations and grants exclusive access to several benefits at UAT.</p>
            <p><a class="btn btn-primary btn-lg" href="apply/">Apply Now &raquo;</a>
                
            </p>

        </div>
    </div>
<div class="container body-content">
           
            <hr />
            <footer>
                <p>&copy; <span id="demo"></span> - <a href="https://uat.edu.ng">University of Africa, Toru-Orua</a></p>
            </footer>
        </div>
<script type="text/javascript">
        var d=new Date();
        document.getElementById('demo').innerHTML = d.getFullYear();
      </script>
	  <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
</body>
</html>
