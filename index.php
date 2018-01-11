


<!DOCTYPE html>
<html>
<head>
	<title>This is html</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  


</head>
<body>

<h2>Check User</h2>

<div class="col-xs-5">
	<input type="text" name="name" id="name" class="form-control" autocomplete="off">
	<span id="msg"></span>
	<br>
<input type="submit" id="submit"  class="btn btn-primary" name="submit">



</div>

<script type="text/javascript">
	
$(document).ready(function(){

	$('#name').keyup(function(){
		
		var name=$(this).val();

		$.ajax({
			url:'check.php',
			method:'POST',
			data:{name:name},
			success:function(data){

				if (data!='0') {
					$('#msg').html('<span class="text-danger">Username not available</span>');
					$('#submit').attr("disabled", true);
				}else{

					$('#msg').html('<span class="text-danger">Username available</span>');
					$('#submit').attr("disabled", false);
				}


			}


		})

	});



});




</script>

</body>
</html>