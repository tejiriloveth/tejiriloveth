<?php
include'include/love.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head><meta charset="utf-8" /><meta http-equiv="X-UA-Compatible" content="IE=edge" /><meta name="viewport" content="width=device-width, initial-scale=1" />
 <title><?php echo htmlentities($orgname) ;?></title>
        <link href="<?php echo htmlentities($logo) ;?>" rel="shortcut icon" type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="content/bootstrap.min.css" rel="stylesheet" />
    <link href="content/bootstrap.css" rel="stylesheet" />
    <link href="content/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="content/font-awesome.min.css" />
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <style>

body {
   background-color: rgba(57, 144, 105, 0.5);
}
    </style>


     <style type="text/css">
         .auto-style1 {
             margin-left: 0px;
         }
         .auto-style2 {
             margin-left: 0px;
             color: #FF3300;
         }
         .auto-style3 {
             color: #000000;
         }
         .auto-style4 {
             color: #CC3300;
         }
         .field-icon{
  float: right;
  margin-left: -10px;
  margin-top: -10px;
  position: relative;
  z-index: 2;
}
     </style>
</head>
<body>
  <?php
include 'include/header'; ?>
<br>
    <form method="post" action="" id="form1">
       <div class="container-fluid"  >       
                <div class="container">
        <div class="row">
             <div class="col-lg-4"></div>

            <div class="col-lg-4">
            <div class="panel panel-success" style="background-color: rgba(255, 255, 255, 0.5)">
                
                <div class="panel-body" >          
                    <p class="text-center">
                            &nbsp;<img id="Image1" class="auto-style1" src="assets/images/uat.png" style="height:106px;width:116px;" />
                          </p>
                   
                          <div class="input-group date txtDate">
                        
                            <input name="username" type="text" id="TextBox1" class="form-control" placeholder="firstname.lastname" required="required" onFocus="this.style.borderColor=&#39;green&#39;" style="height:35px;" />
                         <span class="input-group-addon"><i class="fa fa-user"></i></span>
                              </div>
                          
                    <p>
                          
                                  <div class="input-group date txtDate">
                              <input name="password"  id="password-field"  required="required" type="password" id="TextBox2" class="form-control" placeholder="Password"  style="height:35px;" />
                            <!--   <span ></span> -->
                         <span class="input-group-addon"><i toggle="#password-field" class="fa fa-fw fa-eye toggle-password"></i></span>
                              </div>
                  </p>
                    <p class="text-center">
                              <strong>
                              <button name="submit" class="btn btn-success btn-md  btn-block" >
                                   LOGIN  <span aria-hidden="true"></span>   </button>
                              </strong>
                             </p>
					<p style="color:red;"><?php// echo htmlentities($_SESSION['errmsg']); ?><?php //echo htmlentities($_SESSION['errmsg']="");?></p>
                </div>
               
              
                </div>

        </div>

           </div>
               </div> 
              
<div class="modal fade" id="checkModals" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
                <div class="modal-dialog modal-sm modal-dialog-scrollable" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" style="color: red;" id="exampleModalLabel">Error Message</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p><?php echo htmlentities($error); ?></p>
                        </div>
                        <div class="modal-footer">
              <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>


           </div>


            </div>
             </div>
                    <?php include'include/footer'; ?>
             </div>
  
    </div>
       <script src="scripts/jquery.min.js"></script>
    <script src="scripts/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(".toggle-password").click(function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input=$($(this).attr("toggle"));
        //calling on the attribute of the password
        if (input.attr("type")=="password") {
            //Changing to Text
            input.attr("type","text");
        }else{
            input.attr("type", "password");
        }
    });
    </script>
         <!-- Bootstrap body -->
		 <?php 
      if(!empty($showModals)) {
        // CALL MODAL HERE
        echo '<script type="text/javascript">
            $(document).ready(function(){
                $("#checkModals").modal("show");
            });
        </script>';
    }
    ?>
    </form>
</body>
</html>




