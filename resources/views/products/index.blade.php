<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BISHOP LAWDashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ url('/dashboard-js/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ url('/dashboard-js/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/admin.js') }}"></script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

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


<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<div class="container-fluid">

        <!-- Page Heading -
        <div class="d-flex justify-content-between">
                <h1 class="h3 mb-2 text-gray-800"></h1>
                < <a role="button" onclick="fnExcelReport();" class="d-none my-3 d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Export List</a> 
        </div> DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
            <a role="button" onclick="fnExcelReport();" class="btn btn-sm btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Export List</a><span  style="text-align: right; font-weight:bold"> Products</span>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
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
                        <tfoot>
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
                        </tfoot>
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
                                        <a  data-toggle="modal" data-target="#exampleModal" class="btn btn-info">{{__('app.common.edit') }} </a>
                                    </td>
                                </tr>
                                <?php $count++; ?>
                            @endforeach			
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('layouts/footer')

          

</body>

</html>