<?php
include 'side_bar.php';
include 'header.php';
require_once('connect.php');
include 'functions.php';
/*
// last 3 mont
$last3_mont= date('Y-m', strtotime('-3 month'));

//last month
 $last_month= date('Y-m', strtotime('last month'));

// this month

 $month=date('Y-m');

// last 3 week
   $d1= date('Y-m-d', strtotime("-3 weeks"));
   $start_3week=strtotime($d1);
  $end_3week= date('Y-m-d',strtotime("next saturday",$start_3week)); 


// last week
$previous_week = strtotime("-1 week +1 day");

$start_week = strtotime("last sunday midnight",$previous_week);
$end_week = strtotime("next saturday",$start_week);

$start_week = date("Y-m-d",$start_week);
$end_week = date("Y-m-d",$end_week);

 $start_week.' '.$end_week ;

// this week
$current_day = date("N");
$days_to_friday = 6 - $current_day;
$days_from_monday = $current_day - 1;
 $monday = date("Y-m-d", strtotime("- {$days_from_monday} Days"));
 '<br>';
 $friday = date("Y-m-d", strtotime("+ {$days_to_friday} Days"));

// Albina

                        $tquery1_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and CreatedDate  BETWEEN '$monday' AND '$friday' ";
                         $result_Albina = mysql_query($tquery1_Albina);
                         $row1_Albina = mysql_fetch_array($result_Albina);
                         //print_r($row1);
                         //die();
                         $tquery4_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and CreatedDate  BETWEEN '$start_week' AND '$end_week' ";
                         $result4_Albina = mysql_query($tquery4_Albina);
                         $row4_Albina = mysql_fetch_array($result4_Albina);
                         
                         $tquery5_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and CreatedDate  BETWEEN '$start_3week' AND '$end_3week' ";
                         $result5_Albina = mysql_query($tquery5_Albina);
                         $row5_Albina = mysql_fetch_array($result5_Albina);
                         
                         
                         $tquery6_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and  DATE_FORMAT(CreatedDate, '%Y-%m')= '$month' ";
                         $result6_Albina = mysql_query($tquery6_Albina);
                         $row6_Albina = mysql_fetch_array($result6_Albina);
                        
                         
                         
                         $tquery7_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and DATE_FORMAT (CreatedDate,'%Y-%m')='$last_month' ";
                         $result7_Albina = mysql_query($tquery7_Albina);
                         $row7_Albina = mysql_fetch_array($result7_Albina);
                         
                         $tquery8_Albina = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Albina' and DATE_FORMAT (CreatedDate,'%Y-%m')= '$last3_mont' ";
                         $result8_Albina = mysql_query($tquery8_Albina);
                         $row8_Albina = mysql_fetch_array($result8_Albina);
                         
                         
                         
                         
                         
                         
// Gopal

        $tquery1_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and CreatedDate  BETWEEN '$monday' AND '$friday' ";
                         $result_Gopal = mysql_query($tquery1_Gopal);
                         $row1_Gopal = mysql_fetch_array($result_Gopal);
                         //print_r($row1);
                         //die();
                         $tquery4_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and CreatedDate  BETWEEN '$start_week' AND '$end_week' ";
                         $result4_Gopal = mysql_query($tquery4_Gopal);
                         $row4_Gopal = mysql_fetch_array($result4_Gopal);
                         
                         $tquery5_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and CreatedDate  BETWEEN '$start_3week' AND '$end_3week' ";
                         $result5_Gopal = mysql_query($tquery5_Gopal);
                         $row5_Gopal = mysql_fetch_array($result5_Gopal);
                         
                         
                         $tquery6_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and  DATE_FORMAT(CreatedDate, '%Y-%m')= '$month' ";
                         $result6_Gopal = mysql_query($tquery6_Gopal);
                         $row6_Gopal = mysql_fetch_array($result6_Gopal);
                        
                         
                         
                         $tquery7_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and DATE_FORMAT (CreatedDate,'%Y-%m')='$last_month' ";
                         $result7_Gopal = mysql_query($tquery7_Gopal);
                         $row7_Gopal = mysql_fetch_array($result7_Gopal);
                         
                         $tquery8_Gopal = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Gopal' and DATE_FORMAT (CreatedDate,'%Y-%m')= '$last3_mont' ";
                         $result8_Gopal = mysql_query($tquery8_Gopal);
                         $row8_Gopal = mysql_fetch_array($result8_Gopal);
                         
                         
                         
                         

// Swar
      
                       $tquery1_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and CreatedDate  BETWEEN '$monday' AND '$friday' ";
                         $result_Swar = mysql_query($tquery1_Swar);
                         $row1_Swar = mysql_fetch_array($result_Swar);
                         //print_r($row1);
                         //die();
                         $tquery4_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and CreatedDate  BETWEEN '$start_week' AND '$end_week' ";
                         $result4_Swar = mysql_query($tquery4_Swar);
                         $row4_Swar = mysql_fetch_array($result4_Swar);
                         
                         $tquery5_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and CreatedDate  BETWEEN '$start_3week' AND '$end_3week' ";
                         $result5_Swar = mysql_query($tquery5_Swar);
                         $row5_Swar = mysql_fetch_array($result5_Swar);
                         
                         
                         $tquery6_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and  DATE_FORMAT(CreatedDate, '%Y-%m')= '$month' ";
                         $result6_Swar = mysql_query($tquery6_Swar);
                         $row6_Swar = mysql_fetch_array($result6_Swar);
                        
                         
                         
                         $tquery7_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and DATE_FORMAT (CreatedDate,'%Y-%m')='$last_month' ";
                         $result7_Swar = mysql_query($tquery7_Swar);
                         $row7_Swar = mysql_fetch_array($result7_Swar);
                         
                         $tquery8_Swar = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Swar' and DATE_FORMAT (CreatedDate,'%Y-%m')= '$last3_mont' ";
                         $result8_Swar = mysql_query($tquery8_Swar);
                         $row8_Swar = mysql_fetch_array($result8_Swar);  
                         
                         
                         
                         

// Mukut
                         
                         $tquery1_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and CreatedDate  BETWEEN '$monday' AND '$friday' ";
                         $result_Mukut = mysql_query($tquery1_Mukut);
                         $row1_Mukut = mysql_fetch_array($result_Mukut);
                         //print_r($row1);
                         //die();
                         $tquery4_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and CreatedDate  BETWEEN '$start_week' AND '$end_week' ";
                         $result4_Mukut = mysql_query($tquery4_Mukut);
                         $row4_Mukut = mysql_fetch_array($result4_Mukut);
                         
                         $tquery5_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and CreatedDate  BETWEEN '$start_3week' AND '$end_3week' ";
                         $result5_Mukut = mysql_query($tquery5_Mukut);
                         $row5_Mukut = mysql_fetch_array($result5_Mukut);
                         
                         
                         $tquery6_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and  DATE_FORMAT(CreatedDate, '%Y-%m')= '$month' ";
                         $result6_Mukut = mysql_query($tquery6_Mukut);
                         $row6_Mukut = mysql_fetch_array($result6_Mukut);
                        
                         
                         
                         $tquery7_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and DATE_FORMAT (CreatedDate,'%Y-%m')='$last_month' ";
                         $result7_Mukut = mysql_query($tquery7_Mukut);
                         $row7_Mukut = mysql_fetch_array($result7_Mukut);
                         
                         $tquery8_Mukut = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Mukut' and DATE_FORMAT (CreatedDate,'%Y-%m')= '$last3_mont' ";
                         $result8_Mukut = mysql_query($tquery8_Mukut);
                         $row8_Mukut = mysql_fetch_array($result8_Mukut);
                         
                         
                         
           // Dhruvi
                         
                        $tquery1_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and CreatedDate  BETWEEN '$monday' AND '$friday' ";
                         $result_Dhruvi = mysql_query($tquery1_Dhruvi);
                         $row1_Dhruvi = mysql_fetch_array($result_Dhruvi);
                         //print_r($row1);
                         //die();
                         $tquery4_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and CreatedDate  BETWEEN '$start_week' AND '$end_week' ";
                         $result4_Dhruvi = mysql_query($tquery4_Dhruvi);
                         $row4_Dhruvi = mysql_fetch_array($result4_Dhruvi);
                         
                         $tquery5_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and CreatedDate  BETWEEN '$start_3week' AND '$end_3week' ";
                         $result5_Dhruvi = mysql_query($tquery5_Dhruvi);
                         $row5_Dhruvi = mysql_fetch_array($result5_Dhruvi);
                         
                         
                         $tquery6_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and  DATE_FORMAT(CreatedDate, '%Y-%m')= '$month' ";
                         $result6_Dhruvi = mysql_query($tquery6_Dhruvi);
                         $row6_Dhruvi = mysql_fetch_array($result6_Dhruvi);
                        
                         
                         
                         $tquery7_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and DATE_FORMAT (CreatedDate,'%Y-%m')='$last_month' ";
                         $result7_Dhruvi = mysql_query($tquery7_Dhruvi);
                         $row7_Dhruvi = mysql_fetch_array($result7_Dhruvi);
                         
                         $tquery8_Dhruvi = "SELECT SUM(Requirements) as Rreqvitotal,SUM(Calls) as calltotal,SUM(Submissions) as submissiontotal,SUM(Placements) as plactotal FROM rec_tbltask where RecruiterName='Dhruvi' and DATE_FORMAT (CreatedDate,'%Y-%m')= '$last3_mont' ";
                         $result8_Dhruvi = mysql_query($tquery8_Dhruvi);
                         $row8_Dhruvi = mysql_fetch_array($result8_Dhruvi); 
                         
                         
                         
                         
$tquery3 = "SELECT COUNT(*) as totalCount FROM rec_tbltask";
$tresult3 = mysql_query($tquery3);
$trow3 = mysql_fetch_array($tresult3);

$query="SELECT COUNT(*) as totalCount FROM rec_tbltask where RecruiterName='Albina'";
$result= mysql_query($query);
$row= mysql_fetch_array($result);

$query1="SELECT COUNT(*) as totalCount FROM rec_tbltask where RecruiterName='Gopal'";
$result1= mysql_query($query1);
$row1= mysql_fetch_array($result1);

$query2="SELECT COUNT(*) as totalCount FROM rec_tbltask where RecruiterName='Mukut'";
$result2= mysql_query($query2);
$row2= mysql_fetch_array($result2);

$query3="SELECT COUNT(*) as totalCount FROM rec_tbltask where RecruiterName='Swar'";
$result3= mysql_query($query3);
$row3= mysql_fetch_array($result3);

$query5="SELECT COUNT(*) as totalCount FROM rec_tbltask where RecruiterName='Dhruvi'";
$result5= mysql_query($query5);
$row5= mysql_fetch_array($result5);
 
*/

?>

<ul class="breadcrumb">
    <li>
        <a href="dashboard.php">Home</a>
    </li>
    <li class="active"> Travels</li>
    <li class="active">Dashboard</li>
</ul>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-4">

            

        </div>
        <div class="col-md-4">

            

            <!-- END WIDGET MESSAGES -->

        </div>
        <div class="col-md-4">

            

        </div>
    </div>
    <div class="row">
        <!--
        <div class="col-md-4">

            
            
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-title-box">
                        <h3>Weekly Activity</h3>
                        <span>Interviewing vs Submitted</span>
                    </div>                                    
                    <ul class="panel-controls" style="margin-top: 2px;">
                        <li><a href="#" class="panel-fullscreen"><span class="fa fa-expand"></span></a></li>
                        <li><a href="#" class="panel-refresh"><span class="fa fa-refresh"></span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-cog"></span></a>                                        
                            <ul class="dropdown-menu">
                                <li><a href="#" class="panel-collapse"><span class="fa fa-angle-down"></span> Collapse</a></li>
                                <li><a href="#" class="panel-remove"><span class="fa fa-times"></span> Remove</a></li>
                            </ul>                                        
                        </li>                                        
                    </ul>                                    
                </div>                                
                <div class="panel-body padding-0">
                    <div class="chart-holder" id="dashboard-bar-1" style="height: 200px;"></div>
                </div>                                    
            </div>
            
            

        </div>
        -->
        <div class="col-md-4">

            <!-- START VISITORS BLOCK -->
            
            <!-- END VISITORS BLOCK -->

        </div>

        <div class="col-md-4">

            <!-- START PROJECTS BLOCK -->
            
            </div>
        </div>

    </div>            

</div>
<?php
include 'footer.php';
?>
<!-- START PLUGINS -->
<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
<!-- END PLUGINS -->

<!-- START THIS PAGE PLUGINS-->        
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
<script type="text/javascript" src="js/plugins/scrolltotop/scrolltopcontrol.js"></script>

<script type="text/javascript" src="js/plugins/morris/raphael-min.js"></script>
<script type="text/javascript" src="js/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="js/plugins/rickshaw/d3.v3.js"></script>
<script type="text/javascript" src="js/plugins/rickshaw/rickshaw.min.js"></script>
<script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
<script type='text/javascript' src='js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
<script type='text/javascript' src='js/plugins/bootstrap/bootstrap-datepicker.js'></script>
<script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
<script type="text/javascript" src="js/settings.js"></script>
<script type="text/javascript" src="js/plugins/moment.min.js"></script>
<script type="text/javascript" src="js/plugins/daterangepicker/daterangepicker.js"></script>
<!-- END THIS PAGE PLUGINS-->

<!-- START TEMPLATE -->
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/actions.js"></script>
<script type="text/javascript" src="js/demo_dashboard.js"></script>
<script>

                /* Donut dashboard chart */
                /*
                Morris.Donut({
                    element: 'dashboard-donut-1',
                    data: [
                        {label: "Albina", value: <?php echo $row['totalCount']; ?>},
                        {label: "Gopal", value: <?php echo $row1['totalCount']; ?>},
                        {label: "Mukut", value: <?php echo $row2['totalCount']; ?>},
                        {label: "Swar", value: <?php echo $row3['totalCount']; ?>},
                        {label: "Dhruvi", value: <?php echo $row5['totalCount']; ?>}
                    ],
                    colors: ['#33414E', '#1caf9a', '#FEA223','#f00','#acdb11'],
                    resize: true
                });
                /* END Donut dashboard chart */
</script>
<!-- END TEMPLATE -->
<!-- END SCRIPTS -->         
</body>
</html>






