<?php

	//define('DBHOST', 'localhost');
	//define('DBUSER', 'root');
	//define('DBPASS', '');
	//define('DBNAME', 'barbershop');

 
 $conn = mysqli_connect('localhost','root','', 'sadguruconsultancy');
// $con = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
 //$dbcon = mysql_select_db(DBNAME);
 
 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 

?>

