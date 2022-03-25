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
			  <input type="button" onclick="tableToExcel('testTable', 'Student')" value="{{ __('app.common.export-excel') }}" style="background-color:#1b6b28;color:#ffffff;">
			</div>
		 </div>
           <table class="table table-hover gridtable" style="width:100%;table-layout:fixed;" id="testTable">
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
            <tbody>
				<?php $count=1; ?>
			@foreach($products as $product)
				<tr>
					
					<td>{{ $count}} </td>
					<td>{{$product->product_code}} </td>
					<td>{{$product->product_name}} </td>
					<td>{{$product->catetory_name}} </td>
                    <td>{{$product->product_price}} </td>
                    <td>{{$product->selling_price}} </td>
                    <td>{{$product->total_product}} </td>
                    <td>{{$product->product_description}} </td>
					<td>{{ $product->created_at }} </td>
					<td><input type="submit" class="btn btn-primary sm" value="{{__('app.common.edit') }}"></td>
				</tr>
				<?php $count++; ?>
			@endforeach			
            </tbody>			
		   </table>		
	    </div>
		
@endsection