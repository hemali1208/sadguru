<?php
session_start();
require_once('connect.php');
//include 'functions.php';

if(isset($_REQUEST['login']))
{
      
       $UserName = $_POST['UserName'];
       $Password = $_POST['Password'];
	   
	//echo $sql="SELECT * FROM `dr_tbladmin` WHERE UserName='$UserName' and Password='$Password'";
	//die;
$ret= mysqli_query($conn,"SELECT * FROM `dr_tbladmin` WHERE username='$UserName' and password='$Password'");
   $num=mysqli_fetch_array($ret);
	//print_r($num);
	//die;
   if ($num>0) {
       
     $_SESSION['uname']=$UserName;
		//die;
	  echo " <script>location.replace('dashboard.php');</script>";
	                                   
   }
      
    else
  { 
   // header("location:index.php");
    echo "<script>alert('Wrong Username or Password');</script>";
   
   
     }
	 
}


?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Sadguru Consultancy</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- <link rel="icon" href="favicon.png" type="image/x-icon" />-->
        <link rel="apple-touch-icon" href="img/logo-tops.png">
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <style>
            .man{width: 33.33%;margin: 0 auto;margin-top: 150px;}
            .man h1{text-align: center;}
        </style>
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>

    </head>
    <body>
        <div class="login-container">

            <div class="login-box animated fadeInDown">
               
                <div class="login-body">
                    <div class="login-title"><strong>Welcome,</strong> Sadguru Consultancy </div>
                    <form action="" class="form-horizontal" method="post">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input class="form-control" name="UserName" placeholder="Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input class="form-control" name="Password" placeholder="Password" type="password">
                            </div>
                        </div>
                        <div class="form-group">

                            <div class="col-md-6 col-md-offset-3 text-center">
                                <button type="submit" name="login"  class="btn btn-info btn-block">Log In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->             

        <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>


        <script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
        <script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
        <script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>                
        <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>                
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>                 

        <script type="text/javascript" src="js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->


        <script type="text/javascript" src="js/plugins.js"></script>        
        <script type="text/javascript" src="js/actions.js"></script>   

        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->                   
    </body>
</html>