<?php
include 'side_bar.php';
include 'header.php';
require_once('connect.php');

if(isset($_GET['status']))
{
$status1=$_GET['status'];
//$id=$_GET['id'];
 $pro_id=$_GET['pro_id'];

$select=mysqli_query($conn,"select * from tbl_gallary where id='$status1'");

while($row=mysqli_fetch_object($select))
{
$status_var=$row->status;
if($status_var=='0')
{
$status_state=1;
}
else
{
$status_state=0;
}
$update=mysqli_query($conn,"update tbl_gallary set status='$status_state' where id='$status1'");
if($update)
{
?>
<script> 
window.location.replace("add_multiple_image.php?pro_id=<?php echo $pro_id ;?>");
</script>
<?php
}
else
{
echo mysql_error();
}
}
?>
<?php
}
?>
