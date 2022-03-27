<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar" >

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
                <img src="images/logo.png" style="max-width: 100%; height: 69px;">  
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <li class="nav-item  sidebar-dropdown">
                <a class="nav-link" href="{{ url('/addcategory') }}"  role="button" data-toggle="dropdown" >
                    <i class="fa fa-list-alt"></i>
                    <span>{{ __('app.common.category') }}</span><i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/addcategory') }}"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-category') }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/viewCategory') }}"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-category') }}</a>
                </div>
            </li> 


            <li class="nav-item  sidebar-dropdown">
                <a class="nav-link" href="{{ url('/addProduct') }}"  role="button" data-toggle="dropdown" >
                <i class="fa fa-fax"></i>
				<span>{{ __('app.common.product') }}</span> <i class="fa fa-caret-right float-right pt-2" style="font-size:15px;"></i>
              </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/addProduct') }}"><i class="fa fa-plus" style="font-size:15px;"></i>{{ __('app.common.add-product') }}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ url('/viewProduct') }}"><i class="fa fa-eye" style="font-size:15px;"></i>{{ __('app.common.view-product') }}</a>
                </div>
            </li> 
            
            <li class="nav-item  sidebar-dropdown">
                <a class="nav-link" href="{{ url('/bill') }}"  >
                <i class="fa fa-fax"></i>
                <span>{{ __('app.common.generate-bill') }}</span>
              </a>
               
            </li>  

            <li class="nav-item  sidebar-dropdown">
                <a class="nav-link" href="{{ url('/addProduct') }}"  role="button" data-toggle="dropdown" >
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
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         
        </ul>