@extends('account/layout')
@section('Section') 
    
    <!-- Login Form -->
    <!--<form class="was-validated mt-5" action="Action.php" method="POST">--->
    <form class="was-validated mt-5" id="signupForm">
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
@endsection