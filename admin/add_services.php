

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
   
   <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
     <script src="js/demo_categorys.js"></script>
	
    <?php
    include 'side_bar.php';
    include 'header.php';
	include 'resizeimage.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
    //include 'allfunction.php';
    $error = false;

    if (isset($_POST['save'])) {

        // clean user inputs to prevent sql injectionfs
        $title = $_REQUEST['title'];
		
	
		$descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
		
		$imgFile = $_FILES['image']['name'];
        $tmp_dir = $_FILES['image']['tmp_name'];
        $imgSize = $_FILES['image']['size'];

    $upload_dir = 'images/'; // upload directory
 
	 
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
    // rename uploading image
    $userpic = rand(1000, 1000000) . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
           store_uploaded_image('image', '220', '220','images/thumb',$userpic);
store_uploaded_image('image', '360', '360','images/middle',$userpic);
	 store_uploaded_image('image', '500', '500','images/large',$userpic);
	 
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }

		
		/*
        $ddate = date_create($_POST['user_date']);
        $user_date = date_format($ddate, 'Y-m-d');
        */
        
		
		 
	   //die;

     echo  $query=mysqli_query($conn,"insert into `tbl_service`(t_id,descrip,image,created_on,status)values('$title','$descrip','$userpic',now(),1)");

        
        //End email sending code
       
    }
    
    ?>

<div class="page-content-wrap">
<form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >   
   <div class="row">
		
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add Product</b> </h3>  

							</div>
								</div>
									<div class="box">
									<table class="table">

                            
									<tr>
									<th width="30%"> <span class="error">*</span> Title :</th>

									<td>
									<select name="title" />
									
									<option value="">Select Service Name</option>
									<?php
									$s="select * from service_master where status=1";
									$sr=mysqli_query($conn,$s);
									while($srow=mysqli_fetch_array($sr)){
										?>
										<option value="<?php echo $srow['id']?>"><?php echo $srow['name'] ?></option>
										<?php
									}
									?>
								     </select>
								    </td>
									</tr>
							     
							
							
									<tr>
									<th> Description :</th>

									<td>
                                    <textarea  name="descrip" id="area1" style="width:90%;height:200px;"  class="form-control"  /></textarea>
									</td>
									</tr>
							
							
									<tr>
									<th width="30%"> <span class="error">*</span>Image :</th>

									<td><input type="file" name="image" id="phone" class="form-control"  /></td>
									</tr>
									
									<tr>
									<th>&nbsp;</th>

									<td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

									</tr>
									</table>
                   
							
				</div>
			</div>
		


</div>
</form>
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



<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->



</body>
<script type="text/javascript">

    bkLib.onDomLoaded(function () {

        new nicEditor({fullPanel: true, maxHeight: 200}).panelInstance('area1');
       
    });
    
</script>
<script type="text/javascript">
jQuery.validator.addMethod("alphabetswithspace", function(value, element){
	
    if (/[a-zA-Z ]+$/.test(value)) {
        return true;
    } else {
        return false;
    };
}, "only Alphabets !!!!"); 


    $(document).ready(function ()

    {


        $("#form_register").validate(
                {

                    rules: {
                        'description': {

                            required: true,

                        },
                        'name': {

                            required: true,
                            alphabetswithspace:true,
                        },
                        
                        'image': {

                            required: true,

                        }
                        
                   },

                    messages: {

                        'name': {

                            required: "The UserName is mandatory!",
                            alphabetswithspace: "Only Characters!",
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

</script>

</html>

<?php ob_end_flush(); ?>
