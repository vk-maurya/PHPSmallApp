<?php 
	require_once 'db.php';
	if (isset($_POST['name'])) {
		

		$name=$_POST['name'];

$query="SELECT name FROM form WHERE name='$name'";

$result=mysqli_query($connection,$query);

 if (mysqli_num_rows($result)>0) {
 	echo "<span class="text-danger">Username not available</span>";
 }
else{
	echo "<span class="text-success">Username  available</span>";
}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		

	</title>
</head>
<body>

	


</body>
</html>



<!-- SANDEEP PATIL---8975224456 
Gourav Neema  ----8889065826
Amit Chaurasia---9920621795 -->