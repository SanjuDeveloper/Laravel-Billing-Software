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
			    <th>Customer Code</th>
				<th>Customer Name</th>			  
				<th>Customer Phone</th>
				<th>Customer Email</th>
				<th>Customer Address</th>
				<th>Date</th>			    
			    <th>Action</th>
			 </tr>
			</thead>
            <tbody>
				<?php $count=1; ?>
			@foreach($customers as $data) 
				<tr>
					
					<td>{{ $count }} </td>
					<td>{{ $data->customer_code }} </td>
					<td>{{ $data->customer_name }} </td>
					<td>{{ $data->phone_no }} </td>
					<td>{{ $data->email }} </td>
					<td>{{ $data->address }} </td>
					<td>{{ $data->created_at }} </td>
					<td><input type="submit" class="btn btn-primary sm" value="{{__('app.common.edit') }}"></td>
				</tr>
				<?php $count++; ?>
			@endforeach			
            </tbody>			
		   </table>		
	    </div>
		
@endsection