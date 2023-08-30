@include('Layoutspage.Head')
@include('Layoutspage.sidebar')


<div class="container">
    <div class="container-fluid">
        <form action="{{ url('userUpdate', $dailyBouns->id) }}" method="POST">
            @csrf
            @method('PUT')
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label class="h4 mb-2 text-gray-800" for="">Gold </label>
                    <input type="number" class="form-control" value="{{ $dailyBouns->Gold }}" name="Gold"
                       >
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label class="h4 mb-2 text-gray-800" for="">Diamonds </label>
                    <input type="number" class="form-control" value="{{ $dailyBouns->Diamonds }}" name="Diamonds"
                       >
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label class="h4 mb-2 text-gray-800" for="">Energy </label>
                    <input type="text" class="form-control" value="{{ $dailyBouns->Energy }}" name="Energy"
                       >
                </div>
            </div>
            <div class="col-sm">
                <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
            </div>
        </div>
    </form>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Purchasing Data</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Game DataTables</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                    cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                    style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 131.172px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 131.172px;">Ttem Purchased</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Guantity</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Real Money</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Gold</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Diamond</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 131.172px;">Energy</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($Users as $user )
                                        <tr class="even">
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->itempurchased }}</td>
                                            <td>{{$user->quantity  }}</td>      
                                            <td>{{$user->price  }}</td>      
                                            <td>{{$user->RealMoney  }}</td>      
                                            <td>{{$user->Gold  }}</td>      
                                            <td>{{$user->Diamond  }}</td>      
                                            <td>{{$user->Energy  }}</td>   

                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary float-right export-btn"
                        onclick="exportTableToExcel('dataTable' , 'members-data');"> Export Data</button>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        });
                    });
                </script>
            </div>
        </div>

    </div>
</div>
<br>
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800" style="border-bottom: 2px solid grey;">DailyBonus Data</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Game DataTables</h6>
            </div>
            
            <div class="card-body">
                <div class="table-responsive">
                    <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered dataTable" id="dataTable" width="100%"
                                    cellspacing="0" role="grid" aria-describedby="dataTable_info"
                                    style="width: 100%;">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 131.172px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1"
                                                colspan="1" aria-label="Name: activate to sort column ascending"
                                                style="width: 131.172px;">Mission Completed</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($DailyApiBonus as $DailyApiBonu )
                                        <tr class="even">
                                            <td>{{ $DailyApiBonu->id }}</td>
                                            <td>{{ $DailyApiBonu->Missioncompleted }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-secondary float-right export-btn"
                        onclick="exportTableToExcel('dataTable' , 'members-data');"> Export Data</button>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable({
                            dom: 'Bfrtip',
                            buttons: [
                                'copy', 'csv', 'excel', 'pdf', 'print'
                            ]
                        });
                    });
                </script>
            </div>
        </div>

    </div>
</div>
@include('Layoutspage.footer')

