<?php 

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="crud";

$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

if (!$connection) {
	echo "connection is not working";
	
}





 ?>