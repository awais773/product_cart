@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
         <!-- Begin Page Content -->
         <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                
            </div>

            <!-- Content Row -->
            <div class="row">

                <!-- Total Product Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total LeaderBoard</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $LeaderBoard }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-cart3 fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Product Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                        Total Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-people fa-2x text-gray-500"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total Configration
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $Configration }}</div>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-distribute-horizontal fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                        Daily Bonus </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $DailyBonus }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="bi bi-question-diamond fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Row -->

          

        </div>
        <!-- /.container-fluid -->

  
    <!-- End of Main Content -->
@include('Layoutspage.footer')

