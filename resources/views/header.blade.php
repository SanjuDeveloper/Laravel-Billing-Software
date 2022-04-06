
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>{{ __('app.common.title') }}</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ url('css/simple-sidebar.css') }}" rel="stylesheet">
  <script src="{{ url('assets/jquery/jquery.min.js') }}"></script>
   <script src="{{ url('assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   <script src="{{ url('assets/js/admin.js') }}"></script>
 
   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
   <style>
	.notification .badge {
	  position: absolute;
	  top:0px;
	  padding:2px 5px;
	  border-radius: 50%;
	  background: red;
	  color: white;
	  margin-left: -16px;
	}
	.modal{
		padding: 0px 28px !important;
	}
	.mobile{
		display:none;
	}
	.system{
		display:block;
	}
	@media only screen and (max-width: 780px) {
     .mobile{
		display:block;
	}
	.system{
		display:none;
	}
	.mobile nav ul li a,.fa{
		color:black !important;
	}
	a{
		color:black;
	}
  }
}
   </style>  
</head>

<body>

  <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
	<div class="sticky-top" style="height:900px;">
    <div class="border-right fixed-left" id="sidebar-wrapper">
	  
      <div class="sidebar-heading"><a href="{{ url('/main') }}"><img src="images/logo.png" class="img-responsive img-fluid"></a></div>
      <div class="list-group list-group-flush mt-5">
	    <ul>
		    <li class="">
				<a href="{{ url('/dashboard') }}">
					<i class="fa fa-home"></i>
					<span>{{ __('app.common.home') }}</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="sidebar-dropdown">
				<a href="{{ url('/addcategory') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<i class="fa fa-list-alt"></i>
					<span>{{ __('app.common.category') }}</span><i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ url('/addcategory') }}"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-category') }}</a>
					<div class="dropdown-divider"></div>
					<a class="dropdown-item" href="{{ url('/viewCategory') }}"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-category') }}</a>
              </div>
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-product-hunt"></i>
					<span>{{ __('app.common.product') }}</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/addProduct') }}"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-product') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/viewProduct') }}"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-product') }}</a>
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
		    <li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-institution"></i>
					<span>Store</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="productlist_catwise.php"><i class="fa fa-list" style="font-size:15px;"></i>{{ __('app.common.store-details') }}</a>				
               <!-- <a class="dropdown-item" href="productlist_catwise.php">
				<i class="fa fa-list" style="font-size:15px;"></i>Category Wise List</a>-->
              </div>			
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="">
				<a href="{{ url('/bill') }}">
					<i class="fa fa-fax"></i>
					<span>{{ __('app.common.generate-bill') }}</span>
				</a>
			</li>
			<hr class="hr-dashed hr-menu">
			<li class="sidebar-dropdown">
			<a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-cogs"></i>
					<span>{{ __('app.common.setting') }}</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/customerAdd') }}"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-customer') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ url('/viewcustomer') }}"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-customer') }}</a>
				<div class="dropdown-divider"></div>
                <a class="dropdown-item" href="addusers.php"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-user') }}</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="view-user.php"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-user') }}</a>
              </div>
						
			</li>
			
			
		</ul> 
       
      </div>
    </div>
	</div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->	
	
    <div id="page-content-wrapper">


      <nav class="navbar navbar-expand-lg navbar-light border-bottom system">
        <!--<button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>-->
		<h3 style="text-shadow: 1px 1px 2px blue,0 0 0.2em darkblue;color: black;font-size: 30px;margin-left:30%;" class="text-uppercase">{{ __('app.common.title') }}</h3>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
		    <li class="nav-item mr-2 dropdown bell">			   
				
				<select class="form-control changeLang nav-link notification"  data-toggle="dropdown">
					<option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
					<option value="hi_IN" {{ session()->get('locale') == 'hi_IN' ? 'selected' : '' }}>Hindi</option>
					<option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
				</select>
				
            </li>
			<li class="nav-item mr-2 dropdown bell">
			   <a href="#" class=" nav-link notification" id="notice" data-toggle="dropdown">
				  <i class="fa fa-bell"  style="color:blue"></i>
				  
				  <span class="badge" >78</span>
				</a>
				<div class="dropdown-menu" style="background-color:white;">
					<a class="dropdown-item"  data-value="1" onclick="me();">8</a>';
				</div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" data-toggle="dropdown"><img src="images/user-icon.png" style="width:20px;height:20px"> <b>
			  {{ session()->get('user') }}</b></a>
			    <div class="dropdown-menu dropdown-menu-right" style="background-color:white;">
					<a class="dropdown-item" href="">{{ __('app.common.view-profile') }}</a>
					<a  class="dropdown-item"href="" data-toggle="modal" data-target="#myModal">{{ __('app.common.change-password') }}</a>
				</div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/logout') }}"><img src="images/logout.png" style="width:20px;height:20px"> <b>{{ __('app.common.logout') }}</b></a>
            </li>
			
            
          </ul>
        </div>
      </nav>  
	  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
		   <h4>Change Password</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
		<form action="header.php" method="POST">
		<input type="hidden" value="TRUE" name="CHANGEPASS">
		  <div class="row">
		    <div class="col-md-12">
				<div class="form-group">
					<input type="text" name="Current_pwd" id="Current_pwd" placeholder="Enter Current Password" style="width:100%"> 		
				</div>		
			</div>
          </div>
		  <div class="row">
			<div class="col">
				<div class="form-group">
					<input type="text" name="change_pwd" id="change_pwd" placeholder="Enter New Password">
				</div>		
			</div>
			 <div class="col">
				<div class="form-group">
					<input type="text" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm New Password"> 		
				</div>		
			</div>
          </div> 
		  <div class="row">
		    <div class="col-md-12">
				<center>
				
				<input type="submit" name="submit" class="btn btn-success btn-md" value="SUBMIT">
				</center>	
			</div>
          </div> 
			 
		</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  <!-- ----------------  END HEADER -------------------- -->

  @yield('Section')
  
<!-- Start footer --------------------->
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
 <div class="container-fluid footer" style="bottom:0;position:fixed;width:100%">
	    <div class="row no-gutters" id="footer">
			<div class="col-md-4">
			  <p id="time"></p>
			</div>
			<div class="col-md-2"><p id="use">{{ __('app.common.login-user') }}: {{ session()->get('user') }}</p></div>
			<div class="col-md-6 float-left"><p>@ {{ __('app.common.copyright') }} <?= date('Y'); ?> {{ __('app.common.design-by') }} <a href="" target="_blank" class="text-white">Sanju Developer</p></a></div>
		</div>
	  </div>
      
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->
	<script>
		$(function(){
			var url = "{{ route('changeLang') }}";  
			$(".changeLang").change(function(){
				window.location.href = url + "?lang="+ $(this).val();
			});
		});
	</script>
</body>
<script>

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});

	$('#addproduct').submit(function() 
    {
      var form=this;
      $.ajax({
          type: 'POST',
          url: "{{ route('addproduct.post') }}",
          data: new FormData(this),
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (data)
          {
              var obj = JSON.parse(data);
              if(obj.status === 'Success'){
                  swal({
                  title: "Success!",
                  text: "Product added successfully!",
                  icon: "success",
                  successMode: true,
                  })
                  .then((willDelete) => {
                      if (willDelete) {
                          window.location.href="{{ url('/viewProduct') }}";
                      } 
                  });
              } else{
                  swal({
                      title: "Failed?",
                      text: "Somethiing went wrong. Please try again later!",
                      icon: "warning",
                      buttons: true,
                      dangerMode: true,
                  })
                  .then((willDelete) => {
                      if (willDelete) {
                      window.location.href="{{ url('/addcategory') }}";
                      } else {
                      window.location.href="{{ url('/addcategory') }}";
                      }
                  });
              }
              //swal("Success!", "Product added successfully!", "success");
          }
      })
    return false;
  });

  $('#addcat').submit(function() 
  {
      var form=this;
      $.ajax({
          type: 'POST',
          url: "{{ route('addpcategory.post') }}",
          data: new FormData(this),
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (data)
          {
              var obj = JSON.parse(data);
              if(obj.status === 'Success')
              {
                swal({
                  title: "Success!",
                  text: "Category Created Successfully!",
                  icon: "success",
                  successMode: true,
                  })
                  .then((willDelete) => {
                      if (willDelete) {
                          window.location.href="{{ url('/viewCategory') }}";
                      } 
                  });
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
                  window.location.href="{{ url('/addcategory') }}";
                  } else {
                  window.location.href="{{ url('/addcategory') }}";
                  }
              });
              }
          }
      })
      return false;
  });

  $('#customer-add').submit(function() 
  {
      var form=this;
      $.ajax({
          type: 'POST',
          url: "{{ route('addcustomer.post') }}",
          data: new FormData(this),
          async: false,
          cache: false,
          contentType: false,
          processData: false,
          success: function (data)
          {
            var obj = JSON.parse(data);
            if(obj.status === 'Success'){
              swal({
                title: "Success!",
                text: "Customer Created Successfully!",
                icon: "success",
                successMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href="{{ url('/viewcustomer') }}";
                    } 
                });
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
                window.location.href="{{ url('/addcustomer') }}";
                } else {
                window.location.href="{{ url('/addcustomer') }}";
                }
            });
            }
          }
      })
      return false;
  });


  $('#updateproduct').submit(function() 
  {
      var form=this;
      var  productList = {}
      
      var table = '';
     // $('.tbody').html('');
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
            // productList = obj.products;
            // let table = '';
            // $('.dett').html('');
            // for (let i = 0; i < productList.length; i++) {
            //  alert(productList[i].product_code);
            //   table  += "<tr><td>"+ i +"></td><td>" + productList[i].product_code + "</td></tr>>"; 
            // }  
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
                  table  += "<tr class='dett' id="+ productList[i].product_name+" name="+productList[i].catetory_name +">";
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
</html>
