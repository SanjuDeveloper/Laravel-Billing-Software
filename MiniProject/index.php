<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<div class="container">
  <div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
   
    
    <!-- Login Form -->
    <!--<form class="was-validated mt-5" action="Action.php" method="POST">--->
    <form class="was-validated mt-5" id="myForm">
	<input type="hidden" name="LOGIN" value="Admin">
	 <h3 class="taxt-center text-white">Admin Login </h3>
	 <h4 class="text-danger" id="sms"></h4>
      <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <input  type="submit" class="btn btn-success btn-md btn-flat mb-4"  name="SUBMIT" value="Log In" >
	<button type="submit" class="btn btn-primary btn-md btn-flat mb-4"><a class="underlineHover float-left text-white pb-4 pl-5" href="signup.php">Sign Up</a></button>
	
    </form>

	
    <!-- Remind Passowrd -->
    <div >
      <h6>
	  <a class="underlineHover float-right text-white pb-4 pr-5" href="#">Forgot Password?</a></
    </div>

  </div>
</div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>	
	$('#myForm').submit(function() 
	{
		
		var form=this;
		$.ajax({
			type: 'POST',
			url: 'login-exec.php',
			data: new FormData(this),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (data)
			{
			alert(data);
                $('#sms').text('Invalid Username OR Password');
				window.location.href='dashboard.php';
				// var obj = JSON.parse(data);
				// var login = obj.login;
				// if(login==1)
				// {
				// 	window.location.href='dashboard.php';
				// } else
				// {
				// 	$('#sms').text('Invalid Username OR Password');
				// }
				
			}
		})
		return false;
	});

		
	</script>