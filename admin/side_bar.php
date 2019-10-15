<!DOCTYPE html>
<?php
session_start();
include 'connect.php';

if(!isset($_SESSION['uname'])) {
    header('location:index.php');
}
 $activePage = basename($_SERVER['PHP_SELF'], ".php");
?>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Sadguru Consultancy</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="images/logo1.jpg" type="image/x-icon" />  
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/style.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="css/bvalidator.css"/>


        <!-- EOF CSS INCLUDE -->  
        <!-- this query is for datepeeker  -->
        <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">

    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="dashboard.php"><img src="images/logo1.jpg" width="30" absalign="middle"/>Sadguru Consultancy </a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <a href="#" class="profile-mini">

                        </a>
                    </li>
					
					
                   <li class=" <?php echo ($activePage == "dashboard" ? "active" : ""); ?>">
                        <a href="dashboard.php"><span class="fa fa-home"></span> <span class="xn-text">Dashboard</span></a>

                    </li>
					<li class=" <?php echo ($activePage == "add_services_name" ? "active" : ""); ?>">
                        <a href="add_services_name.php"><span class="fa fa-plus"></span> <span class="xn-text"> Add service Name </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_service_name" ? "active" : ""); ?>">
                        <a href="list_service_name.php"><span class="fa fa-list"></span> <span class="xn-text">List service Name</span></a>

                    </li>
					
                    <li class=" <?php echo ($activePage == "add_services" ? "active" : ""); ?>">
                        <a href="add_services.php"><span class="fa fa-plus"></span> <span class="xn-text"> Add service </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_service" ? "active" : ""); ?>">
                        <a href="list_service.php"><span class="fa fa-list"></span> <span class="xn-text">List service </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "Add_project" ? "active" : ""); ?>">
                        <a href="Add_project.php"><span class="fa fa-plus"></span> <span class="xn-text"> Add Project </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_project" ? "active" : ""); ?>">
                        <a href="list_project.php"><span class="fa fa-list"></span> <span class="xn-text">List project </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "add_gallary" ? "active" : ""); ?>">
                        <a href="add_gallary.php"><span class="fa fa-plus"></span> <span class="xn-text"> Add Gallary </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_gallary" ? "active" : ""); ?>">
                        <a href="list_gallary.php"><span class="fa fa-list"></span> <span class="xn-text">List Gallary </span></a>

                    </li>
					
					
					<li class=" <?php echo ($activePage == "sample" ? "active" : ""); ?>">
                        <a href="sample.php"><span class="fa fa-plus"></span> <span class="xn-text">Sample </span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_sample" ? "active" : ""); ?>">
                        <a href="list_sample.php"><span class="fa fa-list"></span> <span class="xn-text">List sample </span></a>

                    </li>
					
					<li class=" <?php echo ($activePage == "sample" ? "active" : ""); ?>">
                        <a href="team.php"><span class="fa fa-plus"></span> <span class="xn-text">Team</span></a>

                    </li>
					<li class=" <?php echo ($activePage == "list_sample" ? "active" : ""); ?>">
                        <a href="list_team.php"><span class="fa fa-list"></span> <span class="xn-text">List Team </span></a>

                    </li>
					
					
					
					<li class=" <?php echo ($activePage == "inquiry.php" ? "active" : ""); ?>">
                        <a href="inquiry.php"><span class="fa fa-list"></span> <span class="xn-text"> Inquiry </span></a>

                    </li>
					
					
				<li class=" <?php echo ($activePage == "appointment.php" ? "active" : ""); ?>">
                        <a href="appointment.php"><span class="fa fa-list"></span> <span class="xn-text"> Appointment </span></a>

                    </li>
                   
					<li class=" <?php echo ($activePage == "ChangePassword" ? "active" : ""); ?>">
                        <a href="ChangePassword.php"><span class="fa fa-list"></span> <span class="xn-text">Change Password</span></a>

                    </li>
					
					
					
                   
                        

                    </li>
                   
              <!--
                    <li>
                        <a href="change_pass.php"><span class="fa fa-files-o"></span> <span class="xn-text"> Change Password </span></a>
                    </li>
-->



                </ul>
                <!-- END X-NAVIGATION -->
            </div>