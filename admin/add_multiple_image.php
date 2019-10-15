
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.css" rel="stylesheet">  
   <link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css"/>
<?php
include 'side_bar.php';
    include 'header.php';
	include 'resizeimage.php';
    //include 'connect.php';
	require_once('connect.php');
    include 'functions.php';
?>
<?php

 $pro_id=$_GET['pro_id'];
if(isset($_POST['submit'])){
    // Include the database configuration file

    // File upload configuration
    $targetDir = "images/";
	
    $allowTypes = array('jpg','png','jpeg','gif');
    
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = '';
    if(!empty(array_filter($_FILES['files1']['name']))){
        foreach($_FILES['files1']['name'] as $key=>$val){
            // File upload path
            $fileName = basename($_FILES['files1']['name'][$key]);
            $targetFilePath = $targetDir . $fileName;
            
            // Check whether file type is valid
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if($_FILES["files1"]["tmp_name"][$key]){
                    // Image db insert sql
					store_uploaded_multiimage(@files1, '250', '250','images/thumb/',$key);
					store_uploaded_multiimage(@files1, '250', '250','images/middle/',$key);
					store_uploaded_multiimage(@files1, '250', '250','images/large/',$key);
                    $insertValuesSQL .= "('".$fileName."',$pro_id,1),";
                }else{
                    $errorUpload .= $_FILES['files1']['name'][$key].', ';
                }
            }else{
                $errorUploadType .= $_FILES['files1']['name'][$key].', ';
            }
        }
        
        if(!empty($insertValuesSQL)){
            $insertValuesSQL = trim($insertValuesSQL,',');
            // Insert image file name into database
            $insert = $conn->query("INSERT INTO tbl_gallary (image,pro_id,status) VALUES $insertValuesSQL");
            if($insert){
                $errorUpload = !empty($errorUpload)?'Upload Error: '.$errorUpload:'';
                $errorUploadType = !empty($errorUploadType)?'File Type Error: '.$errorUploadType:'';
                $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType;
                $statusMsg = "Files are uploaded successfully.".$errorMsg;?>
				<script> 
window.location.replace("add_multiple_image.php?pro_id=<?php echo $pro_id ;?>");
</script>
          <?php  }else{
                $statusMsg = "Sorry, there was an error uploading your file.";
            }
        }
    }else{
        $statusMsg = 'Please select a file to upload.';
    }
    
    // Display status message
    echo $statusMsg;
}
?>
<div class="page-content-wrap">
<form action="" method="post" enctype="multipart/form-data">
 <div class="row">
		
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add Multiple Images</b> </h3>  

							</div>
								</div>
									<div class="box">
									<table class="table">
									<tr>
									<th width="30%"> <span class="error">*</span>Image :</th>

							<td><input type="file" name="files1[]" multiple class="form-control" /></td>
									
    
    <td><input type="submit" name="submit" value="UPLOAD">
	</td>
	</tr>
	</tr>
</table>
                   
							
				</div>
			</div>
		


</div>
</form>
</div>


<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"><b>List of all Report</b> </h3>   

        <div class="btn-group pull-right">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export All Developer's Report</button>
            <ul class="dropdown-menu">
                
                
				<li><a href="#" onClick ="$('#customers2').tableExport({type: 'excel', escape: 'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'pdf', escape: 'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
            </ul>
        </div> 


    </div>
    <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>
              
                   
                    <th class="text-center">Multiple Images </th>
				  
					<th class="text-center">Action </th>
					
					



                </tr>
            </thead>
            <tbody>
                <?php
             
                 multiple_image($pro_id); 
               ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END PAGE CONTENT -->
</div>
<?php
function multiple_image($pro_id)
{
	global $conn;
	$r=mysqli_query($conn,"select * from tbl_gallary where pro_id='$pro_id' and status=1");
	while($res=mysqli_fetch_array($r)){
		$i=1;
	
		?>
	 <tr>                  
                       
		<td class="text-center" ><img src="images/thumb/<?php echo $res['image']; ?>" /></td>
						
		<td class="text-center" width="300"><a href="delete_multiple_image.php?status=<?php echo $res['id']; ?>&&pro_id=<?php echo $res['pro_id']; ?>" onclick="return confirm('are you sure want to delete')">Delete</a></td>		
						
                    </tr>
					<?php
					$i++;
					
}
}


?>


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
