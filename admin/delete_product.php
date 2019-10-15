<?php
include 'connect.php';
if(isset($_GET['status']))
{
$status1=$_GET['status'];
$select=mysqli_query($conn,"select * from tbl_product where pro_id='$status1'");
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

$update=mysqli_query($conn,"update tbl_product set status='$status_state' where pro_id='$status1' ");
if($update)
{
header("Location:list_products.php");
}
else
{
echo mysqli_error();
}

}
?>
<?php
}
?>