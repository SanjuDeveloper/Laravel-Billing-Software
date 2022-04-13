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

.autocomplete-items {
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
                            <td width="30%"><input type="date" name="bill_date" id="bill_date" value="<?php echo date("Y-m-d"); ?>"></td> 
                        </tr>
                        <tr>
                            <td><b>Customer Name</b></td>
                            <td><input name="cust_name" id="cust_name"></td>
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
                        <tr>
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
                                <input type="hidden" name="CATID" id="CAT_ID">
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
                                <a class="btn btn-success" id="ADDORDER" ><i class="fa fa-plus" style="font-size: 14px;padding: 0px;width: 9px;"></i></a>
                                <a class="btn btn-danger" id="REMOVEORDER"><i class="fa fa-minus" style="font-size: 14px;padding: 0px;width: 9px;"></i></a>
                            </td>
                        </tr>
                        <input type="hidden" name="ccode" id="C_CODE" >
                    </table>
                    
                    <table class="table text-center list" id="testTable">
                        <thead class="bg-success text-white">
                            <tr>
                            <th>S No.</th>
                            <th>Product Code</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Unit Price</th>
                            <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody id="tablebody">
                            
                            
                            
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


    <script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

/*An array containing all the country names in the world:*/
var countries = ["Afghanistan","Albania","Algeria","Andorra","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("product_name"), countries);
</script>


@include('layouts/footer')