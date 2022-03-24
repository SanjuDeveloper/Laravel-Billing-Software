@extends('header')
@section('Section') 
<style>
table.gridtable {
	
	font-family: tahoma;
	line-height:15px;
	border-collapse: collapse;
	
}</style>
		
		<div class="container mt-5">
			<div class="row mb-4">
		    <div class="col-md-10">
			</div>
			<div class="col-md-2 float-right">
			  <input type="button" onclick="tableToExcel('testTable', 'Student')" value="Export to Excel" style="background-color:#1b6b28;color:#ffffff;">
			</div>
		 </div>
           <table class="table table-hover gridtable" style="width:100%;table-layout:fixed;" id="testTable">
		    <thead class="thead-dark">
		     <tr>
			    <th>Sr No.</th>
			    <th>Product COde</th>
				<th>Product Name</th>
				<th>Product Category</th>
                <th>Product Price</th>
                <th>Product Selling Price</th>
                <th>Product Quantity</th>
                <th>Product Description</th>              
				<th>Date</th>			    
			    <th>Action</th>
			 </tr>
			</thead>
            <tbody>
				<?php $count=1; ?>
			@foreach($products as $product)
				<tr>
					
					<td>{{ $count}} </td>
					<td>{{$product->product_code}} </td>
					<td>{{$product->product_name}} </td>
					<td>{{$product->category}} </td>
                    <td>{{$product->product_price}} </td>
                    <td>{{$product->selling_price}} </td>
                    <td>{{$product->total_product}} </td>
                    <td>{{$product->product_description}} </td>
					<td>{{ $product->created_at }} </td>
					<td><input type="submit" class="btn btn-primary sm" value="edit"></td>
				</tr>
				<?php $count++; ?>
			@endforeach			
            </tbody>			
		   </table>		
	    </div>
		
@endsection