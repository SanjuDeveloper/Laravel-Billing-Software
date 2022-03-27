@extends('header')
@section('Section') 
<div class="container-fluid" style="height:690px;padding:0 10%;overflow-y:auto;border-bottom:2px solid red;">
	 
     <!---  START CONTAINER --------------->
         
     <!--<div class="container mt-2">--->
     <form id="customer-add"  class="form">
        <h3 style="text-shadow: 1px 1px 2px black,0 0 0.2em darkblue;color:#DC3545;font-size: 30px;"class="text-center"><u>{{ __('app.customer.add') }}</u></h3>
         <hr class="hr">
         <div class="row pt-5">
            <div class="col">
               <div class="form-group">
                 <label>{{ __('app.customer.code') }}</label>
                 <input type="text" class="form-control" readonly name="customer_code" value="<?php echo (rand(50000,1000));?>">
                 </div>
            </div>
            <div class="col">
               <div class="form-group">
                     <label>{{ __('app.customer.name') }}</label>
                     <input type="text" name="customer_name" class="form-control" placeholder="Enter Customer Name">
                 </div>
            </div>
         </div>
         
         <div class="row"> 
            <div class="col">
               <div class="form-group">
                 <label>{{ __('app.customer.phone') }}</label>
                 <input type="mobile" name="phone_no" class="form-control" placeholder="Enter Phone No.">
              </div> 
            </div> 
            <div class="col">
                 <div class="form-group">
                     <label>{{ __('app.customer.email') }}</label>
                     <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                 </div>
            </div>
           
         </div>
         
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="form-group">
                             <label>{{ __('app.customer.address') }}</label>
                             <textarea name="address" id="address" class="form-control" rows="4" cols="50" placeholder="Enter Address"></textarea>
                             
                         </div>
                     </div>
                     
                 </div>
                 <div class="row">
                   <div class="3">
                   </div>
                     <div class="col-sm-6 d-flex justify-content-center mx-auto">
                        <input type="submit" value="{{ __('app.customer.add') }}" class="btn btn-success btn-md ml-4" name="submit">
                     </div>
                     <div class="3">
                   </div>
                     
                 </div>	
     </form>
</div>
@endsection