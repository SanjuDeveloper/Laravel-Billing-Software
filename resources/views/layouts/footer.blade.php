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
    <script>
        
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

    $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

    var url = "{{ route('changeLang') }}";  
    $(".changeLang").change(function(){
        window.location.href = url + "?lang="+ $(this).val();
    });

    $('.fa-plus').on('click',function(){
        $('#ncate').css('display','block');
        $('.fa-minus').css('display','block');
        $('.fa-plus').css('display','none');
        $('#cat').prop('disabled',true);		
    });

    $('.fa-minus').on('click',function(){
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
                  table  += "<td><a  data-toggle='modal' data-target='#exampleModal' class='btn btn-primary sm'>{{__('app.common.edit') }} </a></td></tr>";
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
   


</script>	