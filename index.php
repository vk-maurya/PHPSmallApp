<?php 

	require_once'db.php';

	$query="SELECT * FROM users order by id DESC ";


	$result=mysqli_query($connection,$query);

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>All users list</title>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 </head>
 <body>
 <div class="container">
 	<br>
 <table class="table table-striped">
	<tr>
		<th>ID</th> 	
	<th>fName</th> 	
	<th>Lname</th> 	
	<th>Email</th> 	
	<th>Gender</th> 	
	<th>City</th> 	
	<th>Edit | Delete</th>
		</tr>
	
	<?php 
	while ($row=mysqli_fetch_array($result)) { 	
	echo "<tr>";
	echo "<td>".$row['id']."</td>";
	 echo "<td>".$row['fname']."</td>";
	 echo "<td>".$row['lname']."</td>";
	echo "<td>".$row['email']."</td>";
	echo "<td>".$row['gender']."</td>";
	 echo "<td>".$row['city']."</td>"; 
	echo"<td><a href=\"edit.php?id=$row[id] \">Edit</a> |<a href=\"delete.php?id=$row[id] \" onClick=\"return confirm('Are you sure') \">Delete</a>"; 

	echo "</tr>";
	
	 } 
	 ?>
	 
	

 </table>



 </div>
 </body>
 </html>