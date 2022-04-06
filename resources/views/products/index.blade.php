@extends('header')
@section('Section') 
<style>
	table.gridtable {
		
		font-family: tahoma;
		line-height:15px;
		border-collapse: collapse;
		
	}
</style>
		
		<div class="container-fluid mt-5">
			<div class="row mb-4">
		    <div class="col-md-10">
			</div>
			<div class="col-md-2 float-right">
			  <input type="button" onclick="tableToExcel('testTable', 'Student')" value="{{ __('app.common.export-excel') }}" style="background-color:#1b6b28;color:#ffffff;">
			</div>
		 </div>
           <table class="table table-hover gridtable" style="width:100%;" id="testTable">
		    <thead class="thead-dark">
		     <tr>
			    <th>{{ __('app.common.count') }}</th>
			    <th>{{ __('app.products.product-code') }}</th>
				<th>{{ __('app.products.product-name') }}</th>
				<th>{{ __('app.products.product-cate') }}</th>
                <th>{{ __('app.products.unit-price') }}</th>
                <th>{{ __('app.products.selling-price') }}</th>
                <th>{{ __('app.products.total-products') }}</th>
                <th>{{ __('app.products.poduct-desc') }}</th>              
				<th>{{ __('app.common.date') }}</th>			    
			    <th>{{ __('app.common.action') }}</th>
			 </tr>
			</thead>
            <tbody  id="tbody">
				<?php $count=1; ?>
			@foreach($products as $product)
				<tr class="dett" id="{{ $product->id }}" name="{{ $product->category }}">
					
					<td>{{ $count}} </td>
					<td >{{ $product->product_code}} </td>
					<td>{{ $product->product_name}} </td>
					<td>{{ $product->catetory_name}} </td>
                    <td>{{ $product->product_price}} </td>
                    <td>{{ $product->selling_price}} </td>
                    <td>{{ $product->total_product}} </td>
                    <td>{{ $product->product_description}} </td>
					<td>{{ $product->created_at }} </td>
					<td>
						<a  data-toggle="modal" data-target="#exampleModal" class="btn btn-primary sm">{{__('app.common.edit') }} </a>
					</td>
				</tr>
				<?php $count++; ?>
			@endforeach			
            </tbody>			
		   </table>		
	    </div>
<script>
	function blink_text() {
		$('.modal-title').fadeOut(500);
		$('.modal-title').fadeIn(500);
	}
	setInterval(blink_text, 1000);

	var tableData = [];
$(document).on('click','#tbody .dett',function(){
	$(this).find('td').each(function(){
		tableData.push($(this).text().split(' ')[0]);
	});
	//console.log(tableData);
	$('#pId').val($(this).attr('id'));
	$('#productCode').val(tableData[1]);
	$('#productname').val(tableData[2]);
	$('#Pcategory').val(tableData[3]);
	$('#unitPrice').val(tableData[4]);
	$('#sellingPrice').val(tableData[5]);
	$('#Quantity').val(tableData[6]);
	$('#message-text').text(tableData[7]);
	getALlCat(tableData[3]);
	tableData.length = 0;
	
});
</script>

		<!------------- MODEL  BOX START --------------------->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="editProduct" aria-hidden="true">
		<div class="modal-dialog" role="document" >
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title text-danger" id="editProduct">{{ __('app.products.title') }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form id="updateproduct" class="form">
				<div class="modal-body">				
					<div class="row">
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.product-code') }}:</label>
							<input type="text" class="form-control" name="product_code" id="productCode">
						</div>
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.product-name') }}:</label>
							<input type="text" class="form-control" name="product_name" id="productname">
							<input type="text" name="productId" id="pId">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.product-cate') }}:</label>
							<select class="form-control" name="category" id="Pcategory">
							</select>	
							<!-- <input type="text" class="form-control" name="category" id="Pcategory" placeholder="search here.." autocomplete="off"> -->
						</div>
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.unit-price') }}:</label>
							<input type="text" class="form-control" name="unit_price" id="unitPrice">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.selling-price') }}:</label>
							<input type="text" class="form-control" name="selling_price" id="sellingPrice">
						</div>
						<div class="form-group col-md-6">
							<label for="recipient-name" class="col-form-label">{{ __('app.products.total-products') }}:</label>
							<input type="text" class="form-control" name="quantity" id="Quantity">
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-12">
							<label for="message-text" class="col-form-label">{{ __('app.products.poduct-desc') }}:</label>
							<textarea class="form-control" id="message-text" name="product_description"></textarea>
						</div>
					</div>				
				</div>
				<div class="modal-footer">
					<input type="submit" class="btn btn-secondary" id="closebtn"  data-dismiss="modal" value="{{ __('app.common.close') }}" >
					<input type="submit" class="btn btn-primary" name="submit" value="{{ __('app.products.submit') }}">
				</div>
			</form>
			</div>
 		</div>
	</div>
		
@endsection