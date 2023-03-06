@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<style>
.text{
    margin: 35px;
}
.date-filter{
    margin: 0px 49px 0 0px;
    background: #0c63e4;
    color: white;
    border: 1px solid #0000005c;
    border-radius: 5px;
}
</style>
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">LeaderBoard List</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Game DataTables</h6>
            </div>
            <div class="card-body">
                <div style="text-align:center;">
                        <a href="/Today" class="text"> <button type="submit" class="btn btn-success">Today</button></a>
                       <a href="/WeekFilter" class="text"> <button type="submit" class="btn btn-success" >Week</button></a> 
                        <a href="MonthFilter" class="text"> <button type="submit" class="btn btn-success" >Month</button></a>
                </div>
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
                                            {{-- <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Position: activate to sort column ascending"
                                                style="width: 663px; padding-right: 25px;">Image</th> --}}
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 106.203px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 106.203px;">Total Level</th>
                                                <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 106.203px;">Score</th>
                
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Action: activate to sort column ascending"
                                                style="width: 99px;">Date</th>
                                        </tr>
                                    </thead>

                                    <tbody id="data-container">
                                    @foreach ($leaderboards as $leaderboard )
                                        <tr class="even">
                                            <td>{{$leaderboard->id  }}</td>
                                            {{-- <td>
                                                @foreach($product->productImage as $area)
                                                <img width="100" style="margin-bottom:9px" height="80" src="{{ asset($area->images) }}" alt="" srcset="">
                                              @endforeach

                                            
                                            </td> --}}
                                            <td>{{$leaderboard->user?->name  }}</td>
                                            <td>{{$leaderboard->total_level  }}</td>
                                            <td>{{$leaderboard->score  }}</td>
                                            {{-- <td>{{ \Carbon\Carbon::parse($leaderboard->created_at)->format('Y-m-d')}}</td> --}}
                                                <td>{{$leaderboard->created_at}}
                                            </td>

                                            {{-- <td style="display: flex">
                                             <div style="  margin-right: 10px">    
                                             <a class="btn btn-success" href="{{ route('products.edit',$product->id) }}"> <i class="fas fa-edit"></i></a>
                                            </div>     
                                            <div style="  margin-left: 10px;">
                                                 <form method="post" action="{{url('/destroyProduct',$product->id)}}">
                                                      @method('delete')
                                                        @csrf      
                                                <button type="submit" class="btn btn-danger"><i
                                                        class="far fa-trash-alt"></i></button>
                                                 </form> 
                                                </div>    
                                            </td> --}}
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

