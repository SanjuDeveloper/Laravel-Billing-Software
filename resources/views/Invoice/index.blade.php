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
     #rep_data{
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
.item-head{
    width:12%; padding-left: 0.75rem;margin-bottom: 1.5rem!important; cursor: pointer;
}

.item-body{
    border-left: 0.25rem solid #1cc88a!important; padding-bottom: 0.5rem!important;
} 
</style>
    <div class="card-header py-3">
		<div class="container-fluid" style="padding:0 3%;overflow-y:auto;">
        <div class="bill p-3" style="background-color:lightgrey;overflow:auto">
            <form id="myform" action="{{ route('bill.print') }}" method="POST">
                @csrf
               <!------------- CATEGORY SECTION -------->
               <div class="row">	
                    @foreach($categories as $cat)
                        <div class="item-head";>
                            <div class="card border-left-primary item-body shadow">
                                <div style="height:20% !important;">
                                    <div class="row no-gutters text-center" style="background-color: aqua;">
                                        <div class="col mr-2"  onClick="getItem('{{$cat->id}}');">                                        
                                            <div class="mb-0 font-weight-bold text-gray-800">{{$cat->catetory_name}}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
               <!------------- ITEM SECTION SECTION -------->
                <div class="row mt-3" id="rep_data" style="overflow:auto">
                    <div class="item-head";>
                        <div class="card border-left-primary item-body shadow">
                            <div style="height:20% !important;">
                                <div class="row no-gutters text-center" style="background-color: #e79edb;">
                                    <div class="col mr-2">                                        
                                        <div class="mb-0 font-weight-bold text-gray-800">Select Category</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-3" id="rep" style="overflow:auto">
                                     
                    <table class="table text-center list" id="testTable">
                        <thead class="bg-success text-white">
                            <tr>
                            <th><input type="checkbox" style='width: 27px !important;height: 19px;' id="deleteAllTempOrder"></th>
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
                            <td><input name="totDiscount" id="totDiscount" value='0'></td>
                            <td width="20%" class="text-center"><b>GST  %</b></td>
                            <td width="10%"><input name="Gst" id="GST" value="18" readonly></td>
                            <td width="20%" class="text-center"><b>Grand Total</b></td>
                            <td width="10%"><input name="NetPayble" id="GRAND" readonly> <input type="hidden" name="netAmount"></td>
                        </tr>
                        
                        <tr>
                            <td colspan="6">&nbsp;</td>
                        </tr>
                        <tr>
                            <td colspan="2" onclick="tableToExcel('testTable', 'Student')" ><center><a class="btn btn-success" id="download" ><i class="fa fa-download"></i></a></center></td>
                            <td colspan="2" >
                                <center><input type="submit" id="bgenerate" name="submit" value="Generete Bill" style="background-color:#1ba126;color:#fafffa;display:block;"></center>
                                <input type="hidden" name="billNumber" value="">     
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
         getBillNumber();
         getALlCat('test');
    };
</script>
@include('layouts/footer')