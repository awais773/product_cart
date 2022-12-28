<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre style="float: right;">
                    {{-- {{ Auth::user()->name }} --}}
                </a>

                {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div> --}}
            </li>
            
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/dashboard') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kosher Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Users') }}">
                    <i class="bi bi-people"></i>
                    <span>Users</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoCategori"
                    aria-expanded="true" aria-controls="collapseTwoCategori">
                    <i class="bi bi-menu-button-wide"></i>
                    <span>Categories/P.Family</span>
                </a>
                <div id="collapseTwoCategori" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Categories/Prod.Family:</h6>
                        <a class="collapse-item" href="{{ url('/addcategory') }}">Add Categories</a>
                        {{-- <a class="collapse-item" href="{{ url('/subcategory') }}">Sub Categories </a> --}}
                        <a class="collapse-item" href="{{ url('/listCategory') }}">List Categories </a>
                        {{-- <a class="collapse-item" href="{{ url('/listsubCategory') }}">List Sub Categories </a> --}}


                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwoDistribut"
                    aria-expanded="true" aria-controls="collapseTwoDistribut">
                    <i class="bi bi-distribute-horizontal"></i>
                    <span>Distributors</span>
                </a>
                <div id="collapseTwoDistribut" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Distributors:</h6>
                        <a class="collapse-item" href="{{ url('/adddistribution') }}">Add Distributors</a>
                        <a class="collapse-item" href="{{ url('/distributionlist') }}">Distributors List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="bi bi-bag-check"></i>
                    <span>Products</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Products:</h6>
                        <a class="collapse-item" href="{{ url('/addprduct') }}">Add Products</a>
                        <a class="collapse-item" href="{{ url('/prductlist') }}">Products List</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ url('/suggestion') }}">
                    <i class="bi bi-chat-left-dots"></i>
                    <span>Suggestions</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Reported_problems') }}">
                    <i class="bi bi-bug"></i>
                    <span>Reported Problems</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/Messages') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Messages (Contact Us)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwostore"
                    aria-expanded="true" aria-controls="collapseTwostore">
                    <i class="bi bi-file-plus"></i>
                    <span>Store</span>
                </a>
                <div id="collapseTwostore" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Store:</h6>
                        <a class="collapse-item" href="{{ url('/AddStores') }}">Add Store</a>
                        <a class="collapse-item" href="{{ url('/StoresList') }}">Store List</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/Notifications') }}">
                    <i class="bi bi-bell-fill"></i>
                    <span>Notifications</span></a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse"
                    data-target="#collapseTwoadvertise" aria-expanded="true" aria-controls="collapseTwoadvertise">
                    <i class="bi bi-badge-ad"></i>
                    <span>Advertisement</span>
                </a>
                <div id="collapseTwoadvertise" class="collapse" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Advertisement:</h6>
                        <a class="collapse-item" href="{{ url('/AddAdvertisement') }}">Add Advertisement</a>
                        <a class="collapse-item" href="{{ url('/AdvertisementList') }}">Advertisement List</a>
                    </div>
                </div>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="{{ url('/Others') }}">
                    <i class="bi bi-person-plus"></i>
                    <span>Others</span></a>
            </li> --}}



            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->


                        <!-- Nav Item - Messages -->


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false" v-pre style="float: right;">
                                {{ Auth::user()->name }}
                            </a>
            
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>

                </nav>
                <!-- End of Topbar -->


                {{-- <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false" v-pre style="float: right;">
                        {{ Auth::user()->name }}
                    </a>
    
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li> --}}