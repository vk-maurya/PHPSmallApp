<!DOCTYPE html>
<html>
<head>
	<title>Add user using JQuery Ajax</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
</head>
<body>

<!-- //<form name="myform" id="myform" method="POST"> -->

Name: <input type="text" id="name" name="name">
Email: <input type="text" id="email" name="email">
Password: <input type="password" id="password" name="password">
<input type="submit" name="submit" id="submit" value="Submit">

<!-- </form> -->
<span id="result"></span>
<script type="text/javascript">
	
	$(document).ready(function(){
		//alert("hjello");

		$('#submit').click(function(){
			 

			var name=$('#name').val();
			var email=$('#email').val();
			var password=$('#password').val();

			$.ajax({
				url:"add.php",
				type:"POST",
				async:false,
				data:{
					"done":1,	
					"name":name,
					"email":email,
					"password":password
				},
				success :function(data){
					document.write(data);


				}


			});
		});


	})



</script>

</body>
</html>