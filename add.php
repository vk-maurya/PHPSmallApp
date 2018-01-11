<?php 
require_once 'db.php';

	// if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$password=$_POST['password'];


	$query="INSERT INTO form(name,email,password) VALUES('{$name}','{$email}','{$password}')";


	$result=mysqli_query($connection,$query);

	if ($result) {
		echo "Successfully Inserted";

	}
else {
	 echo "Insertion Failed";
	}
		
	// }




 ?>