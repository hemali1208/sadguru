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

   


$id=$_GET['id'];

$query=mysqli_query($conn,"select *from  gallery WHERE  id='$id'");
$row=mysqli_fetch_array($query);
unlink("images/$row[image]");
mysqli_query($conn,"delete from gallery WHERE  id='$id'");

header("Location:list_gallary.php");



?>