<?php
include 'side_bar.php';
include 'header.php';
require_once('connect.php');
include 'resizeimage.php';
$update = $_REQUEST['pro_id'];

$result = mysqli_query($conn, "SELECT * FROM `tbl_service` where id='$update'");

$row = mysqli_fetch_array($result);

if (isset($_POST['save'])) {

        // clean user inputs to prevent sql injectionfs
		$demo=$_POST['rupdate'];
        $title = $_REQUEST['title'];
		$price = $_REQUEST['price'];
		$catid=$_REQUEST['catid'];
		$descrip=mysqli_real_escape_string($conn,$_POST['descrip']);
	
	




	$imgFile = $_FILES['image']['name'];
    $tmp_dir = $_FILES['image']['tmp_name'];
    $imgSize = $_FILES['image']['size'];
	$upload_dir = 'images/thumb/';
	if($imgFile )
	{
	
    $imgExt = strtolower(pathinfo($imgFile, PATHINFO_EXTENSION));
    $valid_extensions = array('jpeg', 'jpg', 'pdf', 'gif','png');
    $userpic = rand(1000, 1000000) . "." . $imgExt;

    if (in_array($imgExt, $valid_extensions))
	 {

        if ($imgSize < 5000000) 
		{
     store_uploaded_image('image', '220', '220','images/thumb',$userpic);
     store_uploaded_image('image', '360', '360','images/middle',$userpic);
	 store_uploaded_image('image', '500', '500','images/large',$userpic);
	 
        } else
			{
            $errMSG = "Sorry, your file is too large.";
			}
	 } 
		else
		{
        $errMSG = "Sorry, only JPG, JPEG, PDF, GIF & PNG files are allowed.";
		}
   }
   else
		{
		$userpic=$row['image'];
		}
		
		$result = mysqli_query($conn, "UPDATE tbl_service SET title='$title',cat_id='$catid',price='$price',descrip='$descrip',image='$userpic' WHERE id='$demo'");
//multiple image
?>
<script> 
window.location.replace("list_servvices.php");
</script>
<?php
}


?>


<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Edit Services </b> </h3>  

                    </div>
                </div>
                <div class="box">
                    
                    

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >
                     <input type="hidden" name="rupdate" value="<?php echo $row['id']; ?>"/> 
                        <table class="table">

                            
							<tr>
                                <th width="30%"> <span class="error">*</span> Title :</th>

                                <td><input type="text" name="title" value="<?php echo $row['title']; ?>" id="UserName" class="form-control" placeholder="Title" maxlength="100"/></td>
                            </tr>
							
							
							
								 <tr>
									<th width="30%"> <span class="error">*</span> category :</th>

									<td>
									<select name="catid" id="catid">
									
									<?php
									$q="select * from category where status=1";
		                            $res=mysqli_query($conn,$q);
					                while($row1=mysqli_fetch_array($res)){?>   
									<option value="<?php echo $row1['id'];?>"<?php if($row['cat_id'] == $row1['id']) 
									{ echo "selected"; }?>><?php echo $row1['name'];?></option>
									<?php }?>
									</select>		
									</td>
									</tr>

							<tr>
                                <th> Description :</th>

                                <td>
                                    <textarea  name="descrip" id="area1" style="width:90%;height:200px;"  class="form-control"  /><?php echo $row['descrip']; ?></textarea>
                                </td>
                            </tr>
							
							
							<tr>
                                <th width="30%"> <span class="error">*</span>Image :</th>

                                 <td>
								<p><img src="images/thumb/<?php echo $row['image'];?>" height="80" width="80"></p>
                                IMAGE<input class="form-control" name="image" value="<?php echo $row['image'];?>" type="file">
								
								</td>
								
                            </tr>
							
						<tr>
                                <th width="30%"> <span class="error">*</span>Price :</th>

                                <td><input type="text" name="price" value="<?php echo $row['price']; ?>" id="UserName" class="form-control" placeholder="Price" maxlength="100"/></td>
                            </tr>
							
							
                            <tr>
                                <th>&nbsp;</th>

                                <td><input type="submit" name="save" class="btn btn-warning"  value="UPDATE" /></td>

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


<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->


</body>