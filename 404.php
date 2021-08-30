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
</head>
<body>
<?php
  include 'include/header';
?>

<div class="container">
   <div class="row">
     
        <div class="col-lg-12">

    
        </div>
            
       </div>
        <!--  </div> -->
       <br>
       <br>

    <div class="col-md-12" align="center"><h1>ERROR 404 PAGE</h1></div>
        
    
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
