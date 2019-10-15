<?php
include 'side_bar.php';
include 'header.php';
require_once('connect.php');

if(isset($_GET['status']))
{
$status1=$_GET['status'];


$select=mysqli_query($conn,"select * from tbl_service where id='$status1'");

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
$update=mysqli_query($conn,"update tbl_service set status='$status_state' where id='$status1'");
if($update)
{
?>
<script> 
window.location.replace("list_service.php");
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
