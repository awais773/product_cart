@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Suggestions</h1>
        <h1 class="h2 mb-4 text-gray-800">Add Product</h1>
        @if(session()->has('message'))
         <div class="alert alert-success">
         {{ session()->get('message') }}
         </div>
          @endif
          @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
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
                                                style="width: 10px;">ID</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 663px; padding-right: 168px;">Picture</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 20.203px;">Product-name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 20.203px;">Germany-name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 20.203px;">Hebrew-name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Distributer</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1"
                                                aria-label="Start date: activate to sort column ascending"
                                                style="width: 100px;">Superviser</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">Manufacturer Barcode</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">Manufacturer</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">User-Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">User-Email</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Salary: activate to sort column ascending"
                                                style="width: 89.0312px;">Action</th>
                                        </tr>
                                    </thead>
                                 
                                    <tbody>
                               @foreach ($suggestions as $suggestion)
                               <tr class="even">
                                <td class="sorting_1">{{$suggestion->id }}</td>
                                <td>
                                    @foreach($suggestion->productImage as $area)
                                    <img width="100" style="margin-bottom:9px" height="80" src="{{ asset($area->images) }}" alt="" srcset="">
                                    <a href="{{$area['images'] }}" target="_blank" data-id="{{ $area['id'] }}" download="{{ $area['id']  }}" class="downloader" ><button style="background-color: DodgerBlue;color: white;font-size: 15px;" >download</button></a>

                                     @endforeach

                                </td>                                
                                <td>{{$suggestion->product_name }}</td>
                                <td>{{$suggestion->germany_name }}</td>
                                <td>{{$suggestion->hebrew_name }}</td>

                                <td>{{$suggestion->distributers?->name }}</td>
                                <td>{{$suggestion->supervisor }}</td>
                                <td>{{$suggestion->barcode }}</td>
                                <td>{{$suggestion->manufacturer }}</td>
                                <td>{{$suggestion->users?->name }}</td>
                                <td>{{$suggestion->users?->email }}</td>
                                <td>
                                    {{$suggestion->status }}
                                </td>
                                <td class="table-col">         
                                    <button id="navbarDropdown" class=" service-btn  nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Action
                                    </button>
    
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('products.edit',$suggestion->id) }}">Add Product</a>

                                        <a class="dropdown-item" href="{{route('approveservice',['id'=>$suggestion->id])}}"> Approved </a>
                                        <a class="dropdown-item" href="{{route('disableservice',['id'=>$suggestion->id])}}"> Disable </a>
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
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var user_id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>

@include('Layoutspage.footer')

