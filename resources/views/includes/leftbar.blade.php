<!-- Loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner"></div>
    </div>
</div>

<!-- Begin page -->
<div id="wrapper">

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="">
                <!--<a href="index" class="logo text-center">Fonik</a>-->

                <a href="{{ URL::asset('index')}}" class="logo"><img src="{{ URL::asset('assets/images/Royal Laundry.png')}}"
                                                                     height="150" alt="logo"></a>

            </div>
        </div>

        <div class="sidebar-inner slimscrollleft">
            <div id="sidebar-menu">
                <ul>

                    <li class="menu-title">Main</li>

                 
                    <li>
                        <a href="index" class="waves-effect"><i
                                    class="dripicons-device-desktop"></i><span>Dashboard </span></a>
                    </li>
                    
                    <li  class="menu-title">BOOKING SECTION</li>
                    <li>
                        <a href="{{route('make-a-booking')}}" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span>Create a Laundry Request</span></a>
                    </li>

                    @if(\Illuminate\Support\Facades\Auth::user()->user_role_iduser_role==2)

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span>Booking<span
                                        class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('pending-cus-works')}}"><span>Pending Works</span></a>
                            </li>
                          
                            <li>
                                <a href="{{route('completed-cus-works')}}"><span>Completed Works</span></a>
                            </li>

                        </ul>
                    </li>

                    <li  class="menu-title">USER MANAGEMENT</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cubes"></i><span>Users<span
                             class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                        
                         
                          <li>
                            <a href="view-cus-customers" class="waves-effect"><span>View Customer</span></a>
                         </li>
                        </ul>
                    </li>

                    @endif

                    @if(\Illuminate\Support\Facades\Auth::user()->user_role_iduser_role==1)


                    <li  class="menu-title">INVOICE SECTION</li>
                    <li>
                        <a href="{{route('invoice-history')}}" class="waves-effect"><i class="fa fa-files-o" aria-hidden="true"></i><span>Invoice History</span></a>
                    </li>

                    <li  class="menu-title">TASK MANAGEMENT</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-book" aria-hidden="true"></i><span>Booking<span
                                        class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('pending-works')}}"><span>Pending Works</span></a>
                            </li>
                            <li>
                                <a href="{{route('accepted-works')}}"><span>Accepted Works</span></a>
                            </li>
                            <li>
                                <a href="{{route('completed-works')}}"><span>Completed Works</span></a>
                            </li>

                        </ul>
                    </li>


                   
                    <li  class="menu-title">BRAND INVENTORY</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-files-o" aria-hidden="true"></i><span>Main Service<span
                                        class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('category-prices')}}"><span>Cloth Prices</span></a>
                            </li>
                            <li>
                                <a href="{{route('categories')}}"><span>Cloths</span></a>
                            </li>

                        </ul>
                    </li>




                    <li  class="menu-title">Reports</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-files-o" aria-hidden="true"></i><span>Reports<span
                                        class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                        <ul class="list-unstyled">
                            <li>
                                <a href="{{route('sale-report')}}"><span>Sale Report </span></a>
                            </li>
                            <li>
                                <a href="{{route('pending-orders')}}"><span>Pending Orders </span></a>
                            </li>
                            <li>
                                <a href="{{route('accepted-orders')}}"><span>Accepted Orders </span></a>
                            </li>
                            <li>
                                <a href="{{route('completed-orders')}}"><span>Completed Orders </span></a>
                            </li>
                            <li>
                                <a href="{{route('active-stock')}}"><span>Active Stock</span></a>
                            </li>
                            <li>
                                <a href="{{route('deactive-stock')}}"><span>Deactve Stock</span></a>
                            </li>

                        </ul>
                    </li>



                  

                    


                    <li  class="menu-title">USER MANAGEMENT</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-user" aria-hidden="true"></i><span>Users<span
                             class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                        
                          <li>
                             <a href="add-customer" class="waves-effect"><span>Add Customer</span></a>
                          </li>
                          <li>
                            <a href="view-customers" class="waves-effect"><span>View Customers</span></a>
                         </li>
                        </ul>
                    </li>




                    <li  class="menu-title">PRODUCT INVENTORY</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cubes"></i><span>Products<span
                             class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                        
                          <li>
                             <a href="products" class="waves-effect"><span>Products</span></a>
                          </li>
                          <li>
                            <a href="main-categories" class="waves-effect"><span>Categories</span></a>
                         </li>
                        </ul>
                    </li>

                    <li class="menu-title">SUPPLIER </li>
                    <li>
                        <a href="suppliers" class="waves-effect"><i class="fa fa-user"></i><span>Suppliers</span></a>
                    </li>

                    <li class="menu-title">PURCHASING INVENTORY</li>
                              
                                <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="fa fa-cubes"></i><span>Purchase Order<span
                                                class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                     <li><a href="add-po">Add Purchase Order</a></li><li><a href="pending-po">Pending Purchase Order</a></li>
                                        <li><a href="approved-po">Approved Purchase Order</a></li>
                                        <li><a href="completed-po">Completed Purchase Order</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i
                                            class="fa fa-suitcase"></i><span>GRN<span
                                                class="pull-right"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-grn">Add GRN</a></li>
                                    <li><a href="grn-history">GRN History</a></li>
                                </ul>
                            </li>
                    @endif
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- end sidebarinner -->
    </div>
    <!-- Left Sidebar End -->