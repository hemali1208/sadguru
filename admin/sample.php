

    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

   <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
     <script src="js/demo_sample.js"></script>

    <?php
    include 'side_bar.php';
    include 'header.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
    //include 'allfunction.php';
    $error = false;

    if (isset($_POST['save'])) {

        // clean user inputs to prevent sql injectionfs
        $name = $_REQUEST['name'];
		$description = $_POST['description'];
		//$isstatus=$_REQUEST['isstatus'];
		//@$create_by=$_REQUEST['create_by'];
		
		
		
			$imgFile = $_FILES['image']['name'];
		$tmp_dir = $_FILES['image']['tmp_name'];
		$imgSize = $_FILES['image']['size'];

$upload_dir = 'images/';
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION)); // get image extension
    // valid image extensions
    $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','pdf','.docx'); // valid extensions
    // rename uploading image
    $userpic = rand(1000, 1000000) . "." . $imgExt;

    // allow valid image file formats
    if (in_array($imgExt, $valid_extensions)) {
        // Check file size '5MB'
        if ($imgSize < 5000000) {
            move_uploaded_file($tmp_dir, $upload_dir . $userpic);
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG ,GIF, DOCX  & PDF files are allowed.";
    }

		
		
	   $query=mysqli_query($conn,"insert into `tbl_sample`(name,description,image,status)values('$name','$description','$userpic',1)");
	   
    }
    
    ?>

    <div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add Service </b> </h3>  

                    </div>
                </div>
                <div class="box">
                    
                    

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >

                        <table class="table">

                            
							<tr>
                                <th width="30%"> <span class="error">*</span> Name :</th>

                                <td><input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" maxlength="100"/></td>
                            </tr>
							
							
						        <tr><th>Description :</th>

                                <td>
                                    <textarea  name="description" id="area1" style="width:90%;height:200px;"  class="form-control"  /></textarea>
                                </td>
                            </tr>
							
								<tr>
                                <th width="30%"> <span class="error">*</span>File Upload :</th>

                                <td><input type="file" name="image" id="image" class="form-control" /></td>
                            </tr>
                            <tr>
							
						
							
							
							
                            <tr>
							
							
                                <th>&nbsp;</th>

                                <td><input type="submit" name="save" class="btn btn-warning"  value="Save" /></td>

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
