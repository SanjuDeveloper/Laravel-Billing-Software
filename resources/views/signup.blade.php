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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

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
    <!--<form class="was-validated mt-5" action="Action.php" method="POST">--->
    <form class="was-validated mt-5" id="myForm">
       <input type="hidden" name="LOGIN" value="Admin">
       <h3 class="taxt-center text-white">Signup</h3>
       <h4 class="text-danger" id="sms"></h4>
       <div class="form-group">
            <input type="text" class="form-control" id="userName" placeholder="Enter username" name="userName" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="email" placeholder="Enter email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <div class="form-group">
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password" required>
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Please fill out this field.</div>
        </div>
        <input  type="submit" class="btn btn-success btn-md btn-flat mb-4"  name="SUBMIT" value="Signup" >
        <button type="submit" class="btn btn-primary btn-md btn-flat mb-4">Reset</button>
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover float-left text-white pb-4 pl-5" href="{{ url('/') }}">Login</a>
        </div>

  </div>
</div>
</div>

</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> 


 $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  $('#myForm').submit(function(e) 
  { 

    e.preventDefault();
  
    var userNname = $("input[name=userName]").val();
    var email = $("input[name=email]").val();   
    var phone = $("input[name=phone]").val(); 
    var password = $("input[name=password]").val(); 
    var form=this;
    $.ajax({
      type: 'POST',
      url: "{{ route('signupRequest.post') }}",
      data:{name:userNname, email:email,phone:phone,password:password}, //new FormData(this),
      success: function (data)
      {
        var obj = JSON.parse(data);
        if(obj.status === 'Success'){
          swal("Success!", "You successfully sign in!", "success");
          const redirect = setTimeout(window.location.href="{{ url('/dashboard') }}", 2000);
         // window.location.href="{{ url('/dashboard') }}";
        } else{
          swal({
            title: "Signup Failed?",
            text: "Somethiing went wrong. Please try again later!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              window.location.href="{{ url('/signup') }}";
            } else {
              window.location.href="{{ url('/signup') }}";
            }
          });
        }
      
      }
    })
    
    return false;
  });

  
</script>