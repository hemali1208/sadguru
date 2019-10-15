<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <?php
    include 'side_bar.php';
    include 'header.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
    //include 'allfunction.php';
    $error = false;
	
	
	$update=$_GET['pro_id'];

	$result=mysqli_query($conn,"select * from tbl_product where pro_id='$update'");
	$row=mysqli_fetch_array($result);
	

    if (isset($_POST['save'])) {

             
		$demo=$_POST['reupdate'];
		$name = $_REQUEST['name'];
		$descrip = $_POST['descrip'];
		
		$imgFile=$_FILES['image']['name'];
		$temp_dir=$_FILES['image']['tmp_name'];
		$imgSize=$_FILES['image']['size'];
		
		$upload_dir='images/';
		
		if($imgFile)
		{
			$imgExt=strtolower(pathinfo($imgFile,PATHINFO_EXTENSION));
			
			$valid_extensions=array('jpeg','png','jpg','pdf','txt','.docx','gif');
			$userpic=rand(1000,1000000).''.''.$imgExt;
			
			
			if(in_array($imgExt,$valid_extensions))
			{
				if($imgSize<5000000)
				{
										move_uploaded_file($temp_dir,$upload_dir.$userpic);

				}
				else
				{
					 $errMSG = "Sorry, your file is too large.";

				}
			}
			else
			{
				        $errMSG = "Sorry, only JPG, JPEG, PNG PDF .DOCX & GIF files are allowed.";

			}
		}
		else
		{
			$userpic=$row['image'];
		}
		
		
		//echo $q="update tbl_product set `name`='$name',`descrip`='$descrip',`image`='$userpic' where `pro_id`='$demo'";
		
		$qry=mysqli_query($conn,"update tbl_product set `name`='$name',`descrip`='$descrip',`image`='$userpic' where `pro_id`='$demo'");
	
	header("location:list_project.php");

        
        //End email sending code
       
    }
   
    ?>

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add service</b> </h3>  

                    </div>
                </div>
                <div class="box">
                    
                    

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >

                        <table class="table">

                            
						<input type="hidden" class="form-control" id="" value="<?php echo $row['pro_id']; ?>" name="reupdate">
  									
							
							<tr>
							
							
							<tr>
                                <th width="30%"> <span class="error">*</span>Name :</th>

                                <td><input type="text" name="name" id="name" value="<?php echo $row['name'];?>" class="form-control" placeholder="Enter Name" maxlength="100"/></td>
                            </tr>
							
							   <tr><th width="30%"> <span class="error">*</span> Description :</th>

                                <td>
                                    <textarea  name="descrip" id="descrip"  style="width:90%;height:200px;"  class="form-control"  /> <?php echo $row['descrip'];?></textarea>
                                </td>
                            </tr>
							
						    
							
							<tr>
							<th width="30%"> <span class="error">*</span>Image :</th>
							
							<td><img src="images/<?php echo $row['image']; ?>" height="100" width="100" />
							       <input type="file" name="image" id="image" class="form-control" />
							
							</td>
							
					 </tr>
							
							
					
                            <tr>
                                <th>&nbsp;</th>
							
                                <td><input type="submit" name="save" class="btn btn-warning"  value="update" /></td>

                            </tr>
                        </table>
                    </form>
                    <script type="text/javascript">

                       

                    </script>
                    

                </div>

            </div>

        </div>


    </div>
    <!-- END PAGE CONTENT WRAPPER -->                                



    <!-- END PAGE CONTENT -->
</div>
<?php
include 'footer.php';
?>


<!-- START PLUGINS -->
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


<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!--  Datepicktime js   -->
<script src="js/jquery.datetimepicker.full.js"></script>
<!-- END PAGE PLUGINS -->
<script>
 $("#DevloperDate").datepicker();
                        $("#StartDate").datepicker();
                        $("#EndDate").datepicker();
             $('#Hours').datetimepicker({
    datepicker:false,
    format:'H:i',
    step:5
});
                        </script>
<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    


<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/additional-methods.min.js"></script>



<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script>

<script type="text/javascript">
//<![CDATA[
    bkLib.onDomLoaded(function () {

        new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
       
    });
    //]]>
</script>

<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">
//<![CDATA[
    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {
                           'DevloperDate': {

                            required: true,

                        },
                        'UserName': {

                            required: true,
                            
                        },
                        
                        'Password': {

                            required: true,

                        },
                        'u_email': {

                            required: true,

                        },
                        'Phone': {

                            required: true,

                        }
                        
                        
    


                    },

                    messages: {

                        'UserName': {

                            required: "The UserName is mandatory!",

                        },

                        'Password': {

                            required: "The Password is mandatory!",

                        },

                        'u_email': {

                            required: "The Email is mandatory!",

                        },
                        'Phone': {

                            required: "The Phone is mandatory!",

                        },

                        'Placements': {

                            required: "The placements is mandatory!",

                        },
                        'Hours': {

                            required: "Enter today's working hours is mandatory!",

                        }


                    }

                });

    });

//]]>
</script>

</html>

<?php //ob_end_flush(); ?>
