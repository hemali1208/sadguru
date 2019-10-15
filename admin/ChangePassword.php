<?php
error_reporting(0);
include 'side_bar.php';
include 'header.php';
require_once('connect.php');
//include 'functions.php';

if (isset($_REQUEST['save'])) 
{
     $newpass = $_POST['newpass'];
     $repass = $_POST['repass'];


    if ($newpass == $repass) {
         $UserName = $_SESSION['uname'];
  
  $ret= mysqli_query($conn,"update dr_tbladmin set `Password`='".$newpass."' where `UserName`='".$UserName."'");
        
		if ($ret>0) {
 
            echo "<script>alert('Password Change Sussfully');</script>";
        }
 
    }
	else {
     echo "<script>alert('Password Do Not match');</script>";
 }
}
?>
<div class="page-content-wrap">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form data-bvalidator-validate method="post" class="my-frm" enctype="multipart/form-data" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th colspan="3"><h3 style="text-align: center;">Change Password</h3></th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <th>New Password</th>
                                <th>Re-Enter Password</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><input type="password" name="newpass" data-bvalidator="required" class="form-control" placeholder="New Password"/></td>
                                <td><input type="password" name="repass" data-bvalidator="required" class="form-control" placeholder="Re-Entere Password"/></td>


                            </tr>
                        </tbody>


                        <thead>
                            <tr>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>

                                <td><input type="submit" name="save" value="Save" class="btn btn-success"/></td>
                            </tr>
                        </tbody>
                    </table>
                </form>



            </div>
        </div>

    </div>


</div>
<!-- END PAGE CONTENT WRAPPER -->                                

<script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>                
<!-- END PLUGINS -->

<!-- THIS PAGE PLUGINS -->
<script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
<script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>

<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
<script type="text/javascript" src="js/plugins/bootstrap/bootstrap-select.js"></script>
<script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>    
<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.my-frm').bValidator();
    });
</script>
</body>
</html>

