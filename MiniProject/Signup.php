	<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign Up Form</title>
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

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/user-icon.png" id="icon" alt="User Icon" class="user-icon"/>
    </div>
    
    <!-- Login Form -->
   <form class="was-validated mt-5" id="myForm">  <!-- <form class="was-validated mt-1" id="adduser" >--->
		<h3 class="taxt-center text-white">Sign Up Form</h3>
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
		<div class="form-group">
		  <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
    <div class="form-group">
		  <input type="text" class="form-control" id="course" placeholder="course" name="course" required>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<div class="form-group">
		  <input type="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No." onkeyup="this.value=this.value.replace(/[^\d]/,'')" name="mobile" required>
		  <div class="valid-feedback">Valid.</div>
		  <div class="invalid-feedback">Please fill out this field.</div>
		</div>
		<input  type="submit"  name="SIGNUPME"  class="btn btn-success btn-md btn-flat mb-4" value="Sign Up">
		<input type="hidden"  name="SIGNUP" VALUE="TRUE">
		<button type="submit" class="btn btn-primary btn-md btn-flat mb-4">Reset</button>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover float-left text-white pb-4 pl-5" href="index.php">Log In</a>
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
				window.location.href='dashboard.php';
        alert(data);
        				var obj = JSON.parse(data);
				var login = obj.login;
				if(login==1)
				{
					window.location.href='dashboard.php';
				} else
				{
					$('#sms').text('Something Went Wrong Please Try Again Later');
				}
				
			}
		})
		return false;
	});

		
	</script>