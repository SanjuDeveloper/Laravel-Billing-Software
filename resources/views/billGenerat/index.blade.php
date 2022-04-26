@include('layouts/head')

        <!-- Sidebar -->
        @include('layouts/sidebar')
      
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

        <!-- Topbar -->
        @include('layouts/topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->


<style>
    .bill{
     border:1px solid blue;
   }
     input{
	   width:50% !important;
	 }
	 #rep{
	   background-color:grey;
	   border:1px solid red; 
	 }
	 #rep .table td input,#rep .table td textarea{
	   margin:0 10px;
	   padding:0px; 
	   background-color:#f7f6e1;
	   border:1px solid black;
	   height:30px;
	 }
	 #rep .table td input:focus,#rep .table td textarea:focus{ 
	   background-color:#fffee0;
	   border:1px solid green;
	 }
	  #rep .table td a{
	    margin:10px 10px;
	  	padding:2px 10px;
		margin-top:20px;
	  }
	  .list{
	     background-color:white;
		 color:black;
	  }
	   .table .list tr td, .list tr th{
	    border-collapse : collapse; 
		border : 1px solid black;
	  }
	  
  
* {
  box-sizing: border-box;
}

/*the container must be positioned relative:*/
.autocomplete {
  position: relative;
  display: inline-block;
}

.autocomplete-items {-
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}
</style>
        <div class="card-header py-3">
           <h3 class="" style="text-shadow: 1px 1px 2px blue,0 0 0.2em darkblue;color: black;font-size: 30px;margin-left:40%;"> {{ __('app.bill.generate-bill') }}</h3>
        </div>
		<div class="container-fluid" style="padding:0 3%;overflow-y:auto;">
        <div class="bill p-3" style="background-color:lightgrey;overflow:auto">
            <form id="myform" >
                <table style="font-size:14px;width:100%;">
                    <tbody>
                        <tr>
                            <td width="20%"><b>{{ __('app.bill.bill-number') }}</b></td>
                            <td width="30%"><input name="bill_no" value="<?php echo(rand(10,100)); ?>" id="bill_no" readonly></td> 
                            <td width="20%" class="text-center"><b>Bill Date</b></td>
                            <td width="30%"><input type="date" name="bill_date" id="billDate" value="<?php echo date("Y-m-d"); ?>"></td> 
                        </tr>
                        <tr>
                            <td><b>Customer Name</b></td>
                            <td><input name="cust_name" id="cust_name">
                            <input type="hidden" id="customerCode">
                            </td>
                            <td class="text-center"><b>Customer Address</b></td>
                            <td rowspan="2"><textarea rows="4" class="form-control" name="coustomerAddress" id="Caddress" placeholder="Enter coustomer Address"style="border:1px solid black;margin-top:5px;"></textarea></td> 
                        </tr>
                        <tr>
                            <td><b>Mobile</b></td>
                            <td><input name="Cmobile" id="Cmobile"></td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            
                            <td colspan="2" class="text-center"><span  style="color:#0e7517;font-weight:bold;" id="addcustomer"></span></td>
                            <td></td>
                        </tr>
                        
                    </tbody>
                </table>	
                <div class="row mt-3" id="rep" style="overflow:auto">
                    <table class="table text-center">
                        <tr class="tempOrder">
                            <td>
                                <div class="form-group autocomplete">
                                <label class="text-white"><b>Product Name</b></label>
                                <input type="text" class="form-control" name="name" id="product_name">
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label class="text-white"><b>Product Code</b></label>
                                <input type="text" class="form-control" name="product_code" autocomplete="off" id="product_code">
                                </div>
                            </td>
                            <!--<td>
                                <div class="form-group">
                                <label class="text-white"><b>Description</b></label>
                                <input type="text" class="form-control" name ="PDescription" id ="PDescription"\>
                                </div>
                            </td> -->
                            <td class="text-center">
                                <div class="form-group">
                                <label class="text-white"><b>{{__('app.bill.qty')}}</b></label>
                                <input type="text" class="form-control" name ="Qty" id="Qty" \>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label class="text-white"><b>Unit Price</b></label>
                                <input type="text" class="form-control" name ="Price" id ="Price"\>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label class="text-white"><b>Discount Amt</b></label>
                                <input type="text" class="form-control" name ="PDIS"  id ="PDIS"\>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <label class="text-white"><b>Total Price</b></label>
                                <input type="text" class="form-control" name ="TotalRS" id ="TotalRS"\>
                                </div>
                            </td>
                            <td width="15%" style="vertical-align:middle">
                                <a class="btn btn-success" onClick="AddTempOrder()" ><i class="fa fa-plus" style="font-size: 14px;padding: 0px;width: 9px;"></i></a>
                                <a class="btn btn-danger"><i class="fa fa-minus" style="font-size: 14px;padding: 0px;width: 9px;"></i></a>
                            </td>
                        </tr>
                    </table>
                    
                    <table class="table text-center list" id="testTable">
                        <thead class="bg-success text-white">
                            <tr>
                            <th><input type="checkbox" style='width: 27px !important;height: 19px;' id="deleteAllTempOrder"></th>
                            <th>Action.</th>
                            <th>S No.</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody id="temprders">
                            
                            
                            
                        </tbody>
                    </table>
                </div>
                <table style="font-size:14px;width:100%;margin-top:20px;">
                    <tbody>
                        <tr>
                            <td><b>Discount Amount</b>	</td>
                            <td><input name="totDiscount" id="totDiscount"></td>
                            <td width="20%" class="text-center"><b>GST  %</b></td>
                            <td width="10%"><input name="GST" id="GST" value="18" readonly></td>
                            <td width="20%" class="text-center"><b>Grand Total</b></td>
                            <td width="10%"><input name="GRAND" id="GRAND"></td>
                            <input type="hidden" name="GSTAMOUNT" id="GSTAMOUNT">
                        </tr>
                        
                        <tr>
                            <td colspan="6">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" onclick="tableToExcel('testTable', 'Student')" ><center><a class="btn btn-success" id="download" ><i class="fa fa-download"></i></a></center></td>
                            <td colspan="2" >
                                <center><input type="submit" id="bgenerate" name="submit" value="Generete Bill" style="background-color:#1a3b5e;color:#ffffff;display:block;"></center>
                                    
                            </td>
                            <td colspan="2" onclick="printbill();"><center><a class="btn btn-danger" id="print" ><i class="fa fa-print"></i></a></center></td>
                        </tr>
                    </tbody>
                </table>
            </form>			
        </div>
			<!-- </div>-->
	</div>
    <script type="text/javascript">
    window.onload = function (e) {
         DeleteTempOrder();
    };
</script>
@include('layouts/footer')