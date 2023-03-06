@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<!-- --------List Category--------- -->

<style>
    .button {
        margin-bottom: 0%
    }
</style>
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">DailyBouns List</h1>

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
                                                style="width: 15px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 25px;"> Type</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 89.0312px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dailyBouns as $dailyBoun)
                                            <tr class="even">
                                                <td>{{ $dailyBoun->id }}</td>
                                                <td>{{ $dailyBoun->type }} </td>
                                                <td>
                                                    @if ($dailyBoun->id == 1)
                                                        <a class="btn btn-success"
                                                            href="{{ url('DailyBounsedit', $dailyBoun->id) }}">
                                                            Edit
                                                        </a>
                                                    @elseif ($dailyBoun->id == 2)
                                                        <a class="btn btn-success"
                                                            href="{{ url('z', $dailyBoun->id) }}">
                                                            Edit
                                                        </a>
                                                    @elseif ($dailyBoun->id == 3)
                                                        <a class="btn btn-success"
                                                            href="{{ url('complete', $dailyBoun->id) }}">
                                                            Edit
                                                        </a>
                                                    @else
                                                        <a class="btn btn-success"
                                                            href="{{ url('showAdvertising', $dailyBoun->id) }}">
                                                            Edit
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- <button class="btn btn-secondary float-right export-btn"
                        onclick="exportTableToExcel('dataTable' , 'members-data');"> Export Data</button> --}}
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
<!-- --------End of Category--------- -->
@include('Layoutspage.footer')


{{-- <div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered dataTable" id="dataTable" width="100%"
            cellspacing="0" role="grid" aria-describedby="dataTable_info"
            style="width: 100%;">
            <thead>
                <tr role="row">
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable"
                        rowspan="1" colspan="1" aria-sort="ascending"
                        aria-label="Name: activate to sort column descending"
                        style="width: 15px;">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                        colspan="1" aria-label="Position: activate to sort column ascending"
                        style="width: 25px;"> Type</th>
                    <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                        colspan="1" aria-label="Action: activate to sort column ascending"
                        style="width: 89.0312px;">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dailyBouns as $dailyBoun)
                <tr class="even">
                    <td>1</td>
                    <td>Kill W animals of Type Y </td>


                    <td style="display: flex"> 
                        <div style="  margin-right: 10px">
                            <a class="btn btn-success" href="{{ url('DailyBounsedit',$dailyBoun->id) }}"> <i class="fas fa-edit"></i></a>
                        </div> 
                       
                          <div style="  margin-left: 10px;">
                            <form method="post" action="{{url('/destroyDailyBouns',$dailyBoun->id)}}">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger"><i
                                    class="far fa-trash-alt"></i></button>                                               
                                 </form>
                                </div>
                          </td>
                </tr>
                @endforeach 
            </tbody>
        </table>
    </div>
</div> --}}
