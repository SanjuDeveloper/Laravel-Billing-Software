<style>
    @media only screen and (max-width: 780px) {
	 .footer p{
			 font-size:11px;
			 margin-bottom:0px;
		    padding-top:0px;
	 }
     .row{
		 margin-top:10px !important;
	 }	 
	}
 </style>

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
							<input type="hidden" name="productId" id="pId">
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

<!-- Footer -->
  <footer class="container-fluid footer text-white" style="bottom:0;position:fixed;width:100%;background-color:#222042;">
               
  <div class="row no-gutters" id="footer">
        <div class="col-md-4">
          <p id="time"></p>
        </div>
        <div class="col-md-2"><p id="use">{{ __('app.common.login-user') }}: {{ session()->get('user') }}</p></div>
        <div class="col-md-6 float-left"><p>@ {{ __('app.common.copyright') }} <?= date('Y'); ?> {{ __('app.common.design-by') }} <a href="" target="_blank" class="text-white">Sanju Developer</p></a></div>
	</div>
                <!-- <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy BISHOP LAW2021</span>
                    </div>
                </div> -->
            </footer>
            
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('/dashboard-js/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('/dashboard-js/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ url('/dashboard-js/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ url('/dashboard-js/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ url('/dashboard-js/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('/dashboard-js/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ url('/dashboard-js/js/demo/chart-pie-demo.js') }}"></script>

    
    <!-- Page level plugins -->
    <script src="{{ url('/dashboard-js/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('/dashboard-js/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ url('/dashboard-js/js/demo/datatables-demo.js') }}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function disabled()
        {
            $('#Price').prop('readonly', true);
            $('#TotalRS').prop('readonly', true); 
        }
        
    function fnExcelReport(){
        var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
        var textRange; var j=0;
        tab = document.getElementById('dataTable'); // id of table

        for(j = 0 ; j < tab.rows.length ; j++) 
        {     
            tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
            //tab_text=tab_text+"</tr>";
        }

        tab_text=tab_text+"</table>";
        tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
        tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
        tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE "); 

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
        {
            txtArea1.document.open("txt/html","replace");
            txtArea1.document.write(tab_text);
            txtArea1.document.close();
            txtArea1.focus(); 
            sa=txtArea1.document.execCommand("SaveAs",true,"Subscribers.xls");
        }  
        else                 //other browser not tested on IE 11
            sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

        return (sa);
    }

    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

$(function(){

    disabled();

    $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

    var url = "{{ route('changeLang') }}";  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

    $('#plus').on('click',function(){
        $('#ncate').css('display','block');
        $('.fa-minus').css('display','block');
        $('.fa-plus').css('display','none');
        $('#cat').prop('disabled',true);		
    });

    $('#minus').on('click',function(){
        $('#ncate').css('display','none');
        $('.fa-minus').css('display','none');
        $('.fa-plus').css('display','block');
        $('#cat').prop('disabled',false);
        $('#ncate').prop('disabled',true);
        $('#ncate').val('');		
    });

    setInterval(function()
    { 
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
        var date = new Date(); 
        var hours = date.getHours();
        var minutes = date.getMinutes();
        var ampm = hours >= 12 ? 'pm' : 'am';

        var datetime = days[date.getDay()]+ ","
                +date.getDate() + ","
                + months[date.getMonth()]  + "," 
                + date.getFullYear() + " @ "  
                + hours + ":"  
                + minutes + ":" 
                + date.getSeconds()+" "+ampm;
                $('#time').text(datetime);
    },1000);
}); 

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


$('#updateproduct').submit(function() 
  {
      var form=this;
      var  productList = {}
      var table = '';
      $.ajax({
          type: 'POST',
          url: "{{ route('updateProduct.post') }}",
          data: new FormData(this),
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (data)
          {       
            var obj = JSON.parse(data);
            productList = obj.products;
            console.log(obj.products); 
            if(obj.status === 'Success'){
              $('#closebtn').click();
              swal({
                title: "Success!",
                text: "Product Updated Successfully!",
                icon: "success",
                successMode: true,
                });
                $('#tbody').html('');
                for (let i = 0; i < productList.length; i++) {
                  table  += "<tr class='dett' id="+ productList[i].id+" name="+productList[i].catetory_name +">";
                  table  += "<td>"+ i +"</td><td>" + productList[i].product_code + "</td>";                  
                  table  += "<td>" + productList[i].product_name + "</td><td>"+ productList[i].catetory_name +"</td>";
                  table  += "<td>"+ productList[i].product_price +"</td><td>" + productList[i].selling_price + "</td>";
                  table  += "<td>"+ productList[i].total_product +"</td><td>" + productList[i].product_description + "</td>";
                  table  += "<td>"+ productList[i].created_at +"</td>";
                  table  += "<td><a  data-toggle='modal' data-target='#exampleModal' class='btn btn-primary sm'>{{__('app.common.edit') }} </a>";
                  table  += "<a id='deleteProduct' data-Pid="+ productList[i].id +" class='btn btn-danger'>{{__('app.common.delete') }} </a></td></tr>";
                }
                
                $('#tbody').html(table);

              } else{
            swal({
                title: "Signup Failed?",
                text: "Somethiing went wrong. Please try again later!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                window.location.href="{{ url('/viewProduct') }}";
                } else {
                window.location.href="{{ url('/viewProduct') }}";
                }
            });
            }
          }
      })
      return false;
  });

    var categoryList = {};
    function getALlCat(currentVal)
    {

    $.get("{{ route('viewCategory.get') }}", function(data, status){

    var obj = JSON.parse(data);
    console.log(obj);
        categoryList = obj;
        $("#Pcategory").html('');
        let string = '<option value="1">'+currentVal+'</option>';
        for (let i = 0; i < categoryList.length; i++) {
            string  += "<option value="+categoryList[i].id+">"+categoryList[i].name+"</option>";
        }  
        $("#Pcategory").append(string);      
        });
    

    }

    $(document).on('click','#deleteProduct',function()
    {
        var id =   $(this).attr("data-Pid");
        var self = $(this);
        swal({
        title: "Are you sure?",
        text: "Once deleted, you will not be able to recover this imaginary file!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
            $.ajax({
            type: 'GET',
            url: "deleteProduct/"+id,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data)
            {       
                var obj = JSON.parse(data);
                sweetAlert(obj.status,'Product Deleted Successfully','Somethiing went wrong. Please try again later!','#deleteProduct','Product can not deleted');
               
            }
         })
         return false;
        } else {
            swal("Your record is safe!");
        }
        });
    });


    function sweetAlert(status,message,failedMessage,id=null,failed)
    {
        if(status === 'Success'){
            swal({
            title: "Success!",
            text: message,
            icon: "success",
            successMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    //self.closest('tr').remove();
                    $(id).closest('tr').remove();
                } 
            });

        } else{
            swal({
                title: failed,
                text: failedMessage,
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    location.reload();
                } else {
                    location.reload();
                }
            });
        }
    }

    $(document).on('blur','#cust_name',function()
    {
        
        var name = $(this).val();
        $.ajax({
            type: 'GET',
            url: "getcustomer/"+name,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data)
            {       
               var customer = data;
                for(let i=0; i < customer.length;i++)
                {
                   $(this).val(customer[i].customer_name);
                   $('#Cmobile').val(customer[i].phone_no);
                   $('#Caddress').val(customer[i].address);
                   $('#customerCode').val(customer[i].customer_code);
                }
               
            }
        })
        return false;
    });



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
var countries = ["Afghanistan","Albania","Algeria","Andorra"];

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/

$('#product_name').keyup(function(){
   var product  = $(this).val();
   var allProducts = [];
        $.ajax({
            type: 'GET',
            url: "getProduct/"+product,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function (data)
            {       
               let obj = JSON.parse(data);
               var product = obj;
                for(let i=0; i < product.length;i++)
                {
                    allProducts.push(product[i].product_name.split(" ")[0]);
                }

                autocomplete(document.getElementById("product_name"), allProducts);
            }
        })
        return false;
});   

$(document).on('blur','#product_name',function()
{  
    var name = $(this).val();        
    $.ajax({
        type: 'GET',
        url: "ProductByName/"+name,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
        success: function (data)
        {  
            for(let i=0; i < data.length;i++)
            {
                $('#product_code').val(data[i].product_code);
                $('#Qty').val('1');
                $('#Price').val(data[i].product_price);
                $('#TotalRS').val($('#Qty').val()* $('#Price').val());
            }
            
        }
    })
    return false;
});

$('#Qty').keyup(function(){
    $('#TotalRS').val($(this).val()* $('#Price').val());
});

$('#PDIS').keyup(function(){
   let discount = $(this).val();
   let quantity = $('#Qty').val();
   let price =  $('#Price').val();
   let totalAmount = quantity* price;
    $('#TotalRS').val(totalAmount - discount);
});

$('#product_name').click(function(){
    var customer = $('#cust_name').val();
    if (customer == ""){
        swal("Customer details can not be empty!");  
        $('#cust_name').css('border','1px solid red'); 
        $('#cust_name').focus();
    }

    let Caddress  = $('#Caddress').val();
    let Cmobile = $('#Cmobile').val()
    let customer_code = Math.floor((Math.random() * 1000) + 1);
    $.ajax({
        type: 'POST',
        url: "{{ route('addcustomer.post') }}",
        data: {customer_name:customer,phone_no:Cmobile,address:Caddress,customer_code:customer_code},
        success: function (data) { }
    }); 
});

function AddTempOrder()
{
    var table = '';
   let productCode  =  $('#product_code').val();
   let productDisco =  $('#PDIS').val();
   let productQuty  =  $('#Qty').val();
   let productPrice =  $('#Price').val();
   let productGrand =  $('#TotalRS').val();
   let billNumber   =  $('#bill_no').val();
   let customerCode =  $('#customerCode').val(); 
   table += "<tr>";
            table += "<td>1</td><td>" +productCode+ "</td>";                  
            table += "<td>" +  $('#product_name').val() + "</td>";
            table += "<td>"+productQuty+"</td>";
            table += "<td>" +productPrice+ "</td>";
            table += "<td>"+productGrand+"</td></tr>";

   $.ajax({
        type: 'POST',
        url: "{{ route('tempOrder.create') }}",
        data: {productCode:productCode,productDisco:productDisco,productQuty:productQuty,productPrice:productPrice,productGrand:productGrand,billNumber:billNumber,customerCode:customerCode},
        success: function (data) {
            $('#temprders').append(table);
            $('#product_code').val('');
            $('#product_code').val('');
            $('#PDIS').val('');
            $('#Qty').val('');
            $('#Price').val('');
            $('#TotalRS').val('');  
        }
    });
}

</script>	