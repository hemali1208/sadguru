
<?php

include 'side_bar.php';
include 'header.php';
include 'resizeimage.php';
require_once('connect.php');

$result = mysqli_query($conn, "SELECT *,a.id AS id FROM `tbl_service` a left join service_master b on a.t_id=b.id  where a.status=1 order by a.id desc");

?>


<div class="panel panel-default">
    <div class="panel-heading">                                
        <h3 class="panel-title"><b>List of all Report</b> </h3>   

        <div class="btn-group pull-right">
            <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Export All Services Report</button>
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
                    <th>Sr</th>
                    <th class="text-center"> Title </th>
					
                    <th class="text-center">Images </th>
				    <th class="text-center">Discription </th>
					<th class="text-center">Action </th>
					
					



                </tr>
            </thead>
            <tbody>
                <?php
                $i = 1;

                while ($row = mysqli_fetch_array($result)) {
                     $id = $row['id'];
                    
                    ?>
                    <tr>
                        <td class="text-center" width="300"><?php echo $i; ?></td>
                        <td class="text-center" width="300"><?php echo $row['name']; ?></td>
						
                        <td class="text-center" width="300"><img src="images/thumb/<?php echo $row['image']; ?>" height="100" width="100" /></td>
						<td class="text-center" width="300"><?php echo $row['descrip']; ?></td>
						<td class="text-center" width="300"><a href="edit_service.php?id=<?php echo $row['id']; ?>">Edit</a><label> | </label><a href="delete_service.php?status=<?php echo $row['id']; ?>" onclick="return confirm('are you sure want to delete')">Delete</a></td>		
						
                    </tr>
                    <?php
                    $i++;
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
<script type="text/javascript" src="js/jquery.confirm.js"></script>        
  

<script>
       $('#customers2').dataTable( {
    "oLanguage": {
      "sLengthMenu": "Show _MENU_ Reports",
      "sInfo": "Showing _START_ to _END_ of _TOTAL_ Reports"
    }
});
    
            $(".simpleConfirm").confirm();
            
        </script>

</body>
</html>
