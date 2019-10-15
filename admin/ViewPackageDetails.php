<?php
include 'side_bar.php';
include 'header.php';

//include 'functions.php';
//$q = "SELECT * FROM `tbl_1year` ";

//$query="SELECT * FROM `tbl_packages` a right join tbl_pkgmaster b on a.m_id=b.m_id where a.status=b.status=1 ";

$query="SELECT * FROM  tbl_package where status=1 ";
$result = mysqli_query($conn,$query)or die(mysqli_error());


//$query = "SELECT * FROM `tbl_blog`";

//$result = mysqli_query($conn,$query)or die(mysqli_error());
?>


<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title">View Packages Details</h3>   

        <div class="btn-group pull-right">
		
            <form action="ADD_packages_details.php">					                                           
			<button class="btn btn-info" name="add">+NEW</button>
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export Data</button>
			</form>
            <ul class="dropdown-menu">
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'json', escape: 'false'});"><img src='img/icons/json.png' width="24"/> JSON</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'json', escape: 'false', ignoreColumn: '[2,3]'});"><img src='img/icons/json.png' width="24"/> JSON (ignoreColumn)</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'json', escape: 'true'});"><img src='img/icons/json.png' width="24"/> JSON (with Escape)</a></li>
                <li class="divider"></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'xml', escape: 'false'});"><img src='img/icons/xml.png' width="24"/> XML</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'sql'});"><img src='img/icons/sql.png' width="24"/> SQL</a></li>
                <li class="divider"></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'csv', escape: 'false'});"><img src='img/icons/csv.png' width="24"/> CSV</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'txt', escape: 'false'});"><img src='img/icons/txt.png' width="24"/> TXT</a></li>
                <li class="divider"></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'excel', escape: 'false'});"><img src='img/icons/xls.png' width="24"/> XLS</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'doc', escape: 'false'});"><img src='img/icons/word.png' width="24"/> Word</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'powerpoint', escape: 'false'});"><img src='img/icons/ppt.png' width="24"/> PowerPoint</a></li>
                <li class="divider"></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'png', escape: 'false'});"><img src='img/icons/png.png' width="24"/> PNG</a></li>
                <li><a href="#" onClick ="$('#customers2').tableExport({type: 'pdf', escape: 'false'});"><img src='img/icons/pdf.png' width="24"/> PDF</a></li>
            </ul>
        </div> 


    </div>
    <div class="panel-body">
        <table id="customers2" class="table datatable">
            <thead>
                <tr>
                    <th>Sr No</th>					                 
                    <th>Package Name</th>					
					<th>Services</th>                   
					<th>Description</th>
                    <th>Price</th>                    
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

				while ($row = mysqli_fetch_array($result)) {
				
                 //$row = mysqli_fetch_array($result); 
				  // echo '<pre>';
					//print_r($row);
					
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>						
                        <td><?php echo $row['package_name']; ?></td>							
						<td><?php echo getproduct($row['pro_id']); ?></td>				
                        <td><?php echo $row['description']; ?></td> 
						<td><?php echo $row['price']; ?></td> 					                                                                   
		<td><a href="edit_pkg.php?p_id=<?php echo $row['p_id']; ?>">Edit</a>			
		<label> | </label>				
		<a href="delete_pkg.php?status=<?php echo $row['p_id']; ?>" onclick="return confirm('are you sure want to delete')">Delete</a></td>				
												
                    </tr>
    <?php
    $i++;
}

					function getproduct($pro_id)
					{
						global $conn;
						$id=trim($pro_id,",");
						$query="select id,title from tbl_service WHERE id in ($id)";
						$q=mysqli_query($conn,$query);
						while ($row1= mysqli_fetch_array($q)){
												
							$arr1[]=$row1['title'];
							//$arr2[]=$row1['selling_price'];
						}
						$proname=implode(",",$arr1);
						
						return $proname;
					}
?>
            </tbody>
        </table>
    </div>
</div>
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

<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>  



<script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/tableExport.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jquery.base64.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/html2canvas.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="js/plugins/tableexport/jspdf/libs/base64.js"></script>    


<!-- END PAGE PLUGINS -->

<!-- START TEMPLATE -->



<script type="text/javascript" src="js/plugins.js"></script>        
<script type="text/javascript" src="js/actions.js"></script>    
<script src="js/jquery.bvalidator.js"></script>
<script src="js/jquery.bvalidator-yc.js"></script>

<audio id="audio-alert" src="audio/alert.mp3" preload="auto"></audio>
<audio id="audio-fail" src="audio/fail.mp3" preload="auto"></audio>
<!-- END PRELOADS -->                      


<!-- START THIS PAGE PLUGINS-->        

<!-- END THIS PAGE PLUGINS-->  

<!-- START TEMPLATE -->


<script type="text/javascript">
                                            $(document).ready(function () {
                                                $('.my-frm').bValidator();
                                            });
</script>

</body>
</html>
