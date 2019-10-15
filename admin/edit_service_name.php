<?php
include 'side_bar.php';
include 'header.php';
require_once('connect.php');
include 'resizeimage.php';
$update = $_REQUEST['id'];

$result = mysqli_query($conn, "SELECT * FROM `service_master` where id='$update'");

$row = mysqli_fetch_array($result);

if (isset($_POST['save'])) {

        // clean user inputs to prevent sql injectionfs
		$demo=$_POST['rupdate'];
        $title = $_REQUEST['title'];

		
		$result = mysqli_query($conn, "UPDATE service_master SET name='$title' WHERE id='$demo'");
//multiple image
?>
<script> 
window.location.replace("list_service_name.php");
</script>
<?php
}


?>


<div class="page-content-wrap">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">      
                        <h3 class="panel-title"><b> Edit Services Name</b> </h3>  

                    </div>
                </div>
                <div class="box">
                    
                    

                    <form name="form_register" id='form_register' method="post" class="my_frm"  enctype="multipart/form-data" >
                     <input type="hidden" name="rupdate" value="<?php echo $row['id']; ?>"/> 
                        <table class="table">

                            
							<tr>
                                <th width="30%"> <span class="error">*</span> Title :</th>

                                <td><input type="text" name="title" value="<?php echo $row['name']; ?>" id="UserName" class="form-control" placeholder="Title" maxlength="100"/></td>
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