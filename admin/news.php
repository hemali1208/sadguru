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
    //include 'allfunction.php';
    $error = false;
if (isset($_POST['submit'])) {

        // clean user inputs to prevent sql injectionfs
      $news_title = mysqli_real_escape_string($conn, $_POST['news_title']);
		$news_descri = mysqli_real_escape_string($conn, $_POST['news_descri']);
		//$description=mysqli_real_escape_string($conn,$_POST['descrip']);
		
		
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
     store_uploaded_image('image', '560', '350','images/middle',$userpic);
	
	 
        } else {
            $errMSG = "Sorry, your file is too large.";
        }
    } else {
        $errMSG = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    }
			 
		$sql = "INSERT INTO news (news_title, news_descri,news_image,status) VALUES ('$news_title', '$news_descri','$userpic',1)";
			$res = mysqli_query($conn, $sql);
			if($res){?>
				<script> 
window.location.replace("news.php");
</script>
		<?php	}
			else{
				$fmsg =  "Failed to Create Product";
			}
		}
?>	
<form  method="post"   enctype="multipart/form-data" > 
  <div class="row">
		
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Add News</b> </h3>  

							</div>
								</div>
									<div class="box">
									
									<table class="table">

                            
									<tr>
									<th width="30%"> <span class="error">*</span>   News Title:</th>

									<td><input type="text" name="news_title" id="name" class="form-control" placeholder="Name" id="alphabetswithspace" maxlength="100"/></td>
									</tr>
							       <tr>
								

							
							
									<tr>
									<th> News Description :</th>

									<td>
                                    <textarea  name="news_descri" id="area1" style="width:90%;height:200px;"  class="form-control"  /></textarea>
									</td>
									</tr>
							
							
									<tr>
									<th width="30%"> <span class="error">*</span>Image :</th>

									<td><input type="file" name="image" id="phone" class="form-control"  /></td>
									</tr>
									
									<tr>
									<th>&nbsp;</th>

									<td><input type="submit" name="submit" class="btn btn-warning"  value="Save" /></td>

									</tr>
									</table>
                   
							
				</div>
			</div>
		
</form>
		
 <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>              
                  <th class="text-center">Title </th>
				  <th class="text-center">Descriptio</th>
				  <th class="text-center">Images </th>
				  <th class="text-center">Action </th>									
                </tr>
            </thead>
            <tbody>
			
                <?php
				$s=mysqli_query($conn,"select * from news where status=1");
				while($row=mysqli_fetch_array($s)){
					?>
					<tr>
					<td><?php echo $row['news_title'];?></td>
					<td><?php echo $row['news_descri'];?></td>
					<td><img src="images/thumb/<?php echo $row['news_image'];?>"></td>
					<td class="text-center" width="300"><a href="delete_news.php?status=<?php echo $row['id']; ?>" onclick="return confirm('are you sure want to delete')">Delete</a></td>
					 </tr>
				<?php } ?>
			  
            </tbody>
        </table>
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

