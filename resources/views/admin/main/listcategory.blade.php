@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<!-- --------List Category--------- -->
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Store List</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Kosher DataTables</h6>
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
                                                style="width: 25px;"> English Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 106.203px;">Germen name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Hebrew Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 89.0312px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($category as $categorys)
                                        <tr class="even">
                                            <td>{{ $categorys->id }}</td>
                                            <td>{{ $categorys->name }}</td>
                                            <td>{{ $categorys->germany_name }}</td>
                                            <td>{{ $categorys->hebrew_name }}</td>
                                            <td style="display: flex"> 
                                                <div style="  margin-right: 10px">
                                                    <a class="btn btn-success" href="{{ route('categories.edit',$categorys->id) }}"> <i class="fas fa-edit"></i></a>
                                                </div> 
                                               
                                                  <div style="  margin-left: 10px;">
                                                    <form method="post" action="{{url('/destroyCategory',$categorys->id)}}">
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
<!-- --------End of Category--------- -->
@include('Layoutspage.footer')
