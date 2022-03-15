@extends('header')
@section('Section') 

<style>
  span.eye{
		  position: absolute;
		  right:-16px;
		  display: flex;
		  align-items: center;
		  margin-top:5px;
		}
		
		</style>
		
		<div class="container-fluid" style="height:780px;padding:0 10%;overflow:auto;border-bottom:2px solid red;">
	 
			<!---  START CONTAINER --------------->
				
			<!--<div class="container mt-2">--->
			<!--<form method="POST" action="Action.php" enctype="multipart/form-data" class="form">-->
			<form id="myform" class="form">
			<input type="hidden" name="date" class="form-control" value="<?php  echo date('Y/m/d'); ?>" >
			   <h3 style="text-shadow: 1px 1px 2px black,0 0 0.2em darkblue;color:#DC3545;font-size: 30px;"class="text-center"><u>Add Products</u></h3>
		        <hr class="hr">
				 <div class="alert alert-success alert-dismissible" id="alert" style="display:none">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					<strong>Success!</strong> <p id="sms">This alert box could indicate a successful or positive action</p>
				 </div>
			    <div class="row">
				   <div class="col">
				 	 <div class="form-group">
							<label>Product Code</label>
							<input type="text" class="form-control" name ="product_code" value="<?php echo (rand(50000,10000));?>" readonly>
						</div>
				   </div>
				   <div class="col">
				 	 <div class="form-group">
							<label>Product Name</label>
							<input type="text" name="product_name" class="form-control" placeholder="Product Name">
						</div>
				   </div>
				</div>
			    
				<div class="row"> 
				   <div class="col">
				 	 <div class="form-group">
						<label>Product Category</label>
						<span class="eye" id="toggle_pwd"> <i  style="color:green;" class="fa fa-plus"  aria-hidden="true"></i><i  style="color:red;display:none" class="fa fa-minus"  aria-hidden="true"></i> </span>
						<select class="form-control"  id="cat" name="category">
						<option selected disabled>--Select--</option>
                        </select>
					 </div> 
				   </div>
				   <div class="col" id="ncate" style="display:none;">
						<div class="form-group">
							<label>New Product Category</label>
							<input type="text" name="category_new" id="newcat" class="form-control" placeholder="Enter New Product Category">
						</div>
				   </div>
				  
				</div>
				
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label> Unit Price</label>
									<input type="number"name="product_price" class="form-control" placeholder="Enter M.R.P Price">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									<label>Selling Price</label>
									<input type="number" name="selling_price" class="form-control" placeholder="Enter Selling Price">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									<label>Total Number of Products</label>
									<input type="number" name="total_product" class="form-control" placeholder="Enter Product's stock">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label>Product Description</label>
									<textarea rows="4" class="form-control" name="product_description"placeholder="Enter Product's Description"></textarea>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6 d-flex justify-content-center mx-auto">
							<input type="hidden" value="PRODUCT" name="ADDPRODUCTS">
								<input type="submit" name="submit" class="btn btn-success btn-md" value="SUBMIT">
							</div>
							
						</div>	
		    </form>
				
	   <!-- </div>-->
			
			<!---  END CONTAINER --------------->
		 
			
	    </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>
	$(function()
	{
		//alert("sanju");
		$('.fa-plus').on('click',function(){
		$('#ncate').css('display','block');
		$('.fa-minus').css('display','block');
		$('.fa-plus').css('display','none');
		$('#cat').prop('disabled',true);
		
		});
		$('.fa-minus').on('click',function(){
		$('#ncate').css('display','none');
		$('.fa-minus').css('display','none');
		$('.fa-plus').css('display','block');
		$('#cat').prop('disabled',false);
		
		});
	});
	
	
	
	function redirect() {
	  setTimeout(function()
	  { 
		window.location.href='viewProducts.php';
	  },2000);
	}
	function reserform()
	{
	  document.getElementById("myform").reset();
	 
	}
	$('#myform').submit(function() 
	{
		
		var form=this;
		$.ajax({
			type: 'POST',
			url: 'ajax.php',
			data: new FormData(this),
			async: false,
			cache: false,
			contentType: false,
			processData: false,
			success: function (data)
			{
				$('.alert').css('display','block'); 
				$('#sms').text(data);
				reserform();
				//window.location.href='viewProducts.php';
				redirect();
			}
		})
		return false;
	});

		
	</script>

@endsection