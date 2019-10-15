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

   

	
	$result=mysqli_query($conn,"select * from tbl_sample  order by id DESC");
		
?>

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
                    <th><class="text-center">id</th>
					<th><class="text-center">Name</th>
					<th><class="text-center"> Description</th>
					<th><class="text-center">Action </th>
				</tr>
            </thead>
		<?php
			$i=1;
			while($row=mysqli_fetch_array($result))			{
				
				//$isstatus=$row['isstatus'];
				
				?>
				<tr>
				<td class="text-center" width="300"> <?php echo  $i;?></td>
				<td class="text-center" width="300"> <?php echo  $row['name'];?></td>
<td class="text-center" width="300"> <?php echo  $row['description'];?></td>

				
				
			<td class="text-center" width="300"><a href="edit_sample.php?id=<?php echo $row['id'];?>">Edit|<a href="delete_sample.php?id=<?php echo $row['id'];?>"onclick="return confirm('are you sure want to delete')">Delete</td>
		

								
				</tr>
				<?php
				$i++;
			}
			
			?>
			
</table>
</body>
</html>


