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
			<form id="addproduct" class="form">
			<input type="hidden" name="date" class="form-control" value="<?php  echo date('Y/m/d'); ?>" >
			   <h3 style="text-shadow: 1px 1px 2px black,0 0 0.2em darkblue;color:#DC3545;font-size: 30px;"class="text-center"><u>{{ __('app.common.edit-product') }}</u></h3>
		        <hr class="hr">
			    <div class="row">
				   <div class="col">
				 	 <div class="form-group">
							<label>{{ __('app.products.product-code') }}</label>
							<input type="text" class="form-control" name ="product_code" value="{{ $product->product_code }}" readonly>
						</div>
				   </div>
				   <div class="col">
				 	 <div class="form-group">
							<label>{{ __('app.products.product-name') }}</label>
							<input type="text" name="product_name" class="form-control" value="{{ $product->product_name }}">
						</div>
				   </div>
				</div>
			    
				<div class="row"> 
				   <div class="col">
				 	 <div class="form-group">
						<label>{{ __('app.products.product-cate') }}</label> 
						<span class="eye" id="toggle_pwd"> <i  style="color:green;" class="fa fa-plus"  aria-hidden="true"></i><i  style="color:red;display:none" class="fa fa-minus"  aria-hidden="true"></i> </span>
						<select class="form-control"  id="cat" name="category">
						<option selected disabled>--{{ __('app.common.select') }}--</option>
                        <option>{{ $product->category}}</option>
                        </select>
					 </div> 
				   </div>
				   <div class="col" id="ncate" style="display:none;">
						<div class="form-group">
							<label>{{ __('app.products.new-category') }}</label>
							<input type="text" name="category_new" id="newcat" class="form-control" vaalue="{{ $product->category }}">
						</div>
				   </div>
				  
				</div>
				
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
									<label>{{ __('app.products.unit-price') }}</label>
									<input type="number"name="product_price" class="form-control" value="{{ $product->product_price }}">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									<label>{{ __('app.products.selling-price') }}</label>
									<input type="number" name="selling_price" class="form-control" value="{{ $product->selling_price }}">
								</div>
							</div>
							
							<div class="col-sm-4">
								<div class="form-group">
									<label>{{ __('app.products.total-products') }}</label>
									<input type="number" name="total_product" class="form-control" value="{{ $product->total_product }}">
								</div>
							</div>
							<div class="col-sm-12">
								<div class="form-group">
									<label>{{ __('app.products.poduct-desc') }}</label>
									<textarea rows="4" class="form-control" name="product_description">{{ $product->product_description}} </textarea>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-sm-6 d-flex justify-content-center mx-auto">							
								<input type="submit" name="submit" class="btn btn-success btn-md" value="{{ __('app.products.submit') }}">
							</div>
							
						</div>	
		    </form>
	    </div>
@endsection