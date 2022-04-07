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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
  <script src="{{ url('assets/js/index.js') }}"></script>
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

    @yield('Section')


    </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script> 

 $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });


  $('#signupForm').submit(function(e) 
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
          const redirect = setTimeout(window.location.href="{{ url('/main') }}", 2000);
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

$('#myForm').submit(function(e) 
{ 

  e.preventDefault();
 
  var userNname = $("input[name=userName]").val();
  var password = $("input[name=password]").val();   
  var form=this;
  $.ajax({
    type: 'POST',
    url: "{{ route('loginRequest.post') }}",
    data:{name:userNname, password:password}, //new FormData(this),
    success: function (data)
    {
      var obj = JSON.parse(data);
      var login = obj.Login; //Failed
      if(login === 'Success')
      {
        swal("Success!", "You successfully sign in!", "success");
        const redirect = setTimeout(window.location.href="{{ url('/main') }}", 2000);
      } else
      {
        swal("Failed!", "Login faild, Try again later!", "warning");
      }
      
    }
  })
  return false;
});

  
</script>