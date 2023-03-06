@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<!-- --------List Category--------- -->
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Configration List</h1>

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
                                                style="width: 25px;"> Animals</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Office: activate to sort column ascending"
                                                style="width: 106.203px;">Hitpoints</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Max Timer</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Animals Visible</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Animals Shown</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">TBA1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">TBA2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Total Animal</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">level no</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1"
                                                colspan="1" aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">AP1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">AP2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">G1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">G2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">D1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">D2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">E1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">E2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">RLC1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">XS1</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">RLC2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">XS2</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Level Configration</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Probability </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Mouse </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Bat </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Rooster </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Dog </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Crab </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Snake </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Wolf </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Rhino </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Crocodile </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Bear </th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Age: activate to sort column ascending"
                                                style="width: 45.5156px;">Note</th>
                                            <th class="sorting" tabindex="0" aria-controls="dataTable"
                                                rowspan="1" colspan="1"
                                                aria-label="Action: activate to sort column ascending"
                                                style="width: 89.0312px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach ($category as $categorys)
                                            <tr class="even">
                                                <td>{{ $categorys->id }}</td>
                                                <td>{{ $categorys->animal_length }}</td>
                                                {{-- <td>
                                            @if (isset($categorys->animal_length) && is_array($categorys->animal_length))
                                           {{ implode(',', $categorys->animal_length) }}
                                           @endif
                                           </td>                                             --}}
                                                <td>{{ $categorys->hitpoints }}</td>
                                                <td>{{ $categorys->max_timer }}</td>
                                                <td>{{ $categorys->animal_visibility }}</td>
                                                <td>{{ $categorys->animal_shown }}</td>
                                                <td>{{ $categorys->tba1 }}</td>
                                                <td>{{ $categorys->tba2 }}</td>
                                                <td>{{ $categorys->total_animal }}</td>
                                                <td>{{ $categorys->level_no }}</td>
                                                <td>{{ $categorys->ap1 }}</td>
                                                <td>{{ $categorys->ap2 }}</td>
                                                <td>{{ $categorys->g1 }}</td>
                                                <td>{{ $categorys->g2 }}</td>
                                                <td>{{ $categorys->d1 }}</td>
                                                <td>{{ $categorys->d2 }}</td>
                                                <td>{{ $categorys->e1 }}</td>
                                                <td>{{ $categorys->e2 }}</td>
                                                <td>{{ $categorys->rlc1 }}</td>
                                                <td>{{ $categorys->xs1 }}</td>
                                                <td>{{ $categorys->rlc2 }}</td>
                                                <td>{{ $categorys->xs2 }}</td>
                                                <td>{{ $categorys->level_configation }}</td>
                                                <td>
                                                    @if (isset($categorys->probability['data']) && is_array($categorys->probability['data']))
                                                        {{ implode(',', $categorys->probability['data']) }}
                                                    @endif
                                                </td>
                                                <td>{{ $categorys->mouse }}</td>
                                                <td>{{ $categorys->bat }}</td>
                                                <td>{{ $categorys->rooster }}</td>
                                                <td>{{ $categorys->dog }}</td>
                                                <td>{{ $categorys->crab }}</td>
                                                <td>{{ $categorys->snake }}</td>
                                                <td>{{ $categorys->wolf }}</td>
                                                <td>{{ $categorys->rhino }}</td>
                                                <td>{{ $categorys->crocodile }}</td>
                                                <td>{{ $categorys->bear }}</td>
                                                <td>{{ $categorys->note }}</td>
                                                <td style="display: flex">
                                                    <div style="  margin-right: 10px">
                                                        <a class="btn btn-success"
                                                            href="{{ route('configrations.edit', $categorys->id) }}">
                                                            <i class="fas fa-edit"></i></a>
                                                    </div>

                                                    <div style="  margin-left: 10px;">
                                                        <form method="post"
                                                            action="{{ url('/destroyCategory', $categorys->id) }}">
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
