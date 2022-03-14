@extends('header')
@section('Section') 
<style>
 .table td, .table th{
	 font-family:rounded black arial;
	 border:1px solid red;
	 
 } .table thead th{
	font-weight:800;
 }
 body{
	 background-color:#dadada;
 } 
  .card-header{
	  padding:0px !important;
	  vertical-align:middle !important;
  }
  .card-header p{
	  margin:0 auto;
	  padding-left:15px;
  }
  .card-body{
	  box-shadow: 2px 2px 2px 2px #9c9c9c;
	  border:1px solid #ebebeb;
  }
 .fa{
	  font-size:20px;
  }
</style>

 <div class="container-fluid" style="height:780px;padding:0 3%;overflow-y:auto;">
        <div class="row">
		  <div class="col-md-4">
		    <div class="card">
			  <div class="card-header"  style="background-color:#43a047;color:white">
			     <p><i class="fa fa-calendar-o" style="color:white" aria-hidden="true"></i> <b>Today's Collection
				 </b></p>
			  </div>
			  <div class="card-body text-center" style="background-color:#f4f3f5;">
			    <p class="font-weight-bold">Rs.500</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-4">
		    <div class="card">
			  <div class="card-header" style="background-color:#ef5350;color:white">
			    <p><i class="fa fa-calendar" style="color:white;" aria-hidden="true"></i> <b>Monthly's Collection</b></p>
			  </div>
			  <div class="card-body text-center" style="background-color:#f4f3f5;">
			    <p class="font-weight-bold">Rs. 500</p>
			  </div>
			</div>
		  </div>
		  <div class="col-md-4">
		    <div class="card">
			  <div class="card-header" style="background-color:#00acc1;color:white">
			    <p><i class="fa fa-calendar-check-o" style="color:white;" ></i> <b>Total Collection</b></p>
			  </div>
			  <div class="card-body text-center" style="background-color:#f4f3f5;">
			    <p class="font-weight-bold">Rs. 500</p>
			  </div>
			</div>
		  </div>
		</div>
        <div class="row mt-4" style="overflow:auto;">
			<div class="col-md-12">
				<div class="card text-white" style="height:230px;width:100%;">
					<div class="card-header" style="background-color:#8e24aa;color:white">
					 <p style="padding-left:15px;"><b>Today's Transaction</b></p>  
					</div>
					<div class="card-body" style="height:325px;width:100%;overflow:auto;background-color:#f4f3f5;">
					    <table class="table table-hover table-stripped text-center" >
							<thead style="background-color:#e6fcff !important; color:#1f284a">
								<tr>
								   <th>Sr No.</th>
								   <th>Bill No.</th>
								   <th>C.Code</th>
								   <th>C.Name</th>
								   <th>P. Code</th>
								   <th>Product Name</th>
								   <th>Product Cat</th>
								   <th>Quantity</th>
								   <th>Unit Prize</th>
								   <th>Total Prize</th>
								   <th>GST@ %</th>
								   <th>GST@ (Rs.)</th>
									<th>Discount@ (Rs.)</th>
								   <th>Payable Amount</th>
								</tr>
							</thead>
							<tbody style="background-color:#f7f7e6;  color:#252b47;">
								
								<tr>
								   <td>1</td>
								   <td>898</td>
								   <td>9890</td>
								   <td>C.Name</td>
								   <td>899</td>
								   <td>Product Name</td>
								   <td>Product Cat</td>
								   <td>80</td>
								   <td>540</td>
								   <td>540</td>
								   <td>19%</td>
								   <td>800</td>
								   <td>540</td>
								   <td>540</td>
								</tr><tr>
								   <td>1</td>
								   <td>898</td>
								   <td>9890</td>
								   <td>C.Name</td>
								   <td>899</td>
								   <td>Product Name</td>
								   <td>Product Cat</td>
								   <td>80</td>
								   <td>540</td>
								   <td>540</td>
								   <td>19%</td>
								   <td>800</td>
								   <td>540</td>
								   <td>540</td>
								</tr>
								
							</tbody>					
					    </table> 
					</div>
				</div> 
			</div>
		</div>
		
		<div class="row mt-4" >
			<div class="col-md-6" >
				<div class="card" style="height:220px;width:100%;">
					<div class="card-header" style="background-color:#fb8c00;color:white">
					 <p style="padding-left:15px;"><b>Customer Detail</b></p>  
					</div>
					<div class="card-body" style="height:300px;width:100%;overflow:auto;background-color:#f4f3f5;">
					    <table class="table table-hover table-stripped  text-center" style="overflow:scroll">
							<thead style="background-color:#79ab76;color:red;">
								<tr>
								   <th>Sr No.</th>
								   <th>C.Code</th>
								   <th>C.Name</th>
								   <th>Phone No.</th>
								   <th>Email Id</th>
								   <th>Address</th>
								   <th>Date</th>
								   <th>Action</th>
								</tr>
							</thead>
							<tbody style="background-color:#f7f7e6;  color:#252b47;">
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td><span><i class="fa fa-edit" style="color:blue"></i></span> 
										<span><i class="fa fa-trash" style="color:red"></i></span>
									</td>
								</tr>
							</tbody>					
					    </table> 
					</div>
				</div> 
			</div>
			<div class="col-md-6">
				<div class="card text-white" style="height:220px;">
					<div class="card-header" style="background-color:#1c4e80;color:white">
					 <p style="padding-left:15px"><b>Product Detail</b></h4>  
					</div>
					<div class="card-body" style="height:300px;width:100%;overflow:auto;background-color:#f4f3f5;">
					    <table class="table table-hover table-stripped  text-center">
							<thead style="background-color:#79ab76;color:red;">
								<tr>
								   <th>Sr No.</th>
								   <th>P.Code</th>
								   <th>P.Name</th>
								   <th>P.Cat</th>
								   <th>Unit Price</th>
								   <th>Unit Price</th>
									<th>Selling Price</th>
									<th>Total No of Product</th>
									<th>Date</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody style="background-color:#f7f7e6;  color:#252b47;">
								<tr>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;</td>
									<td>&nbsp;<input type="submit"  name="Status" value="data"></td>
									<td><a href=""><i class="fa fa-edit" style="color:blue"></i></a> 
									<a href=""><i class="fa fa-trash" style="color:red"></i></a></td>
								</tr>
							</tbody>					
					    </table> 
					</div>
				</div> 
			</div>
		</div>
		<p style="color:red;font-weight:bold">Instructions :<marquee> C.Code :Customer Code , C.Name :Customer Name , P.Code :Product Code ,P.Name :Product Name</marquee></p>
 </div>
   @endsection
   

 