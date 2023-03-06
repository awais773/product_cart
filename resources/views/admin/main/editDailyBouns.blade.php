@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<!-- --------Category--------- -->
<div class="main-sub">
    <div class="container-fluid">
        @if (session()->has('message'))
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
        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Edit Daily Bonusses</h1>
        <form action="{{ url('DailyBounsupdate', $dailyBouns->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h1 class="h3 mb-4 text-gray-800">Gold:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G1 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g1 }}" name="g1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G2 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g2 }}" name="g2">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G3 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g3 }}" name="g3">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G4 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g4 }}" name="g4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G5 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g5 }}" name="g5">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G6 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g6 }}" name="g6">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G7 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->g7 }}" name="g7">
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            <h1 class="h3 mb-4 text-gray-800">Diamond:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D1 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d1 }}" name="d1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D2 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d2 }}" name="d2">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D3 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d3 }}" name="d3">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D4 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d4 }}" name="d4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D5 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d5 }}" name="d5">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D6 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d6 }}" name="d6">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D7 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->d7 }}" name="d7">
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            <h1 class="h3 mb-4 text-gray-800">Energy:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E1 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e2 }}" name="e1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E2 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e2 }}" name="e2">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E3 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e3 }}" name="e3">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E4 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e4 }}" name="e4">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E5 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e5 }}" name="e5">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E6 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e6 }}" name="e6">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E7 </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->e7 }}" name="e7">
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            <h1 class="h3 mb-4 text-gray-800">Random Range:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Wmin </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->wmin }}" name="wmin">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Wmax </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->wmax }}" name="wmax">
                    </div>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            {{-- <h1 class="h3 mb-4 text-gray-800">Random Btw Animals:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Ymin </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->ymin }}" name="ymin">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Ymax </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->ymax }}" name="ymax">
                    </div>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div> --}}
            <br>
            <h1 class="h3 mb-4 text-gray-800">If P < 1 then:</h1>
                    <div class="row">
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="h4 mb-2 text-gray-800" for="">Ymin1 </label>
                                <input type="text" class="form-control" value="{{ $dailyBouns->ymin1 }}"
                                    name="ymin1">
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="form-group">
                                <label class="h4 mb-2 text-gray-800" for="">Ymax1 </label>
                                <input type="text" class="form-control" value="{{ $dailyBouns->ymax1 }}"
                                    name="ymax1">
                            </div>
                        </div>
                        <div class="col-sm">
                        </div>
                        <div class="col-sm">
                        </div>
                    </div>
                    <br>
                    <h1 class="h3 mb-4 text-gray-800">If P < 4 then:</h1>
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="h4 mb-2 text-gray-800" for="">Ymin2 </label>
                                        <input type="text" class="form-control" value="{{ $dailyBouns->ymin2 }}"
                                            name="ymin2">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label class="h4 mb-2 text-gray-800" for="">Ymax2 </label>
                                        <input type="text" class="form-control" value="{{ $dailyBouns->ymax2 }}"
                                            name="ymax2">
                                    </div>
                                </div>
                                <div class="col-sm">
                                </div>
                                <div class="col-sm">
                                </div>
                            </div>

                            <br>
                            <h1 class="h3 mb-4 text-gray-800">If P < 6 then:</h1>
                                    <div class="row">
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label class="h4 mb-2 text-gray-800" for="">Ymin3 </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dailyBouns->ymin3 }}" name="ymin3">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                            <div class="form-group">
                                                <label class="h4 mb-2 text-gray-800" for="">Ymax3 </label>
                                                <input type="text" class="form-control"
                                                    value="{{ $dailyBouns->ymax3 }}" name="ymax3">
                                            </div>
                                        </div>
                                        <div class="col-sm">
                                        </div>
                                        <div class="col-sm">
                                        </div>
                                    </div>

                                    <br>
                                    <h1 class="h3 mb-4 text-gray-800">If P < 8 then:</h1>
                                            <div class="row">
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label class="h4 mb-2 text-gray-800" for="">Ymin4
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $dailyBouns->ymin4 }}" name="ymin4">
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                    <div class="form-group">
                                                        <label class="h4 mb-2 text-gray-800" for="">Ymax4
                                                        </label>
                                                        <input type="text" class="form-control"
                                                            value="{{ $dailyBouns->ymax4 }}" name="ymax4">
                                                    </div>
                                                </div>
                                                <div class="col-sm">
                                                </div>
                                                <div class="col-sm">
                                                </div>
                                            </div>

                                            <br>
                                            <h1 class="h3 mb-4 text-gray-800">If P < 11 then:</h1>
                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <label class="h4 mb-2 text-gray-800"
                                                                    for="">Ymin5 </label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $dailyBouns->ymin5 }}" name="ymin5">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                            <div class="form-group">
                                                                <label class="h4 mb-2 text-gray-800"
                                                                    for="">Ymax5 </label>
                                                                <input type="text" class="form-control"
                                                                    value="{{ $dailyBouns->ymax5 }}" name="ymax5">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm">
                                                        </div>
                                                        <div class="col-sm">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <h1 class="h3 mb-4 text-gray-800">If P < 18 then:</h1>
                                                            <div class="row">
                                                                <div class="col-sm">
                                                                    <div class="form-group">
                                                                        <label class="h4 mb-2 text-gray-800"
                                                                            for="">Ymin6 </label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $dailyBouns->ymin6 }}"
                                                                            name="ymin6">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm">
                                                                    <div class="form-group">
                                                                        <label class="h4 mb-2 text-gray-800"
                                                                            for="">Ymax6 </label>
                                                                        <input type="text" class="form-control"
                                                                            value="{{ $dailyBouns->ymax6 }}"
                                                                            name="ymax6">
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm">
                                                                </div>
                                                                <div class="col-sm">
                                                                </div>
                                                            </div>

                                                            <br>
                                                            <h1 class="h3 mb-4 text-gray-800">If P < 26 then:</h1>
                                                                    <div class="row">
                                                                        <div class="col-sm">
                                                                            <div class="form-group">
                                                                                <label class="h4 mb-2 text-gray-800"
                                                                                    for="">Ymin7 </label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $dailyBouns->ymin7 }}"
                                                                                    name="ymin7">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                            <div class="form-group">
                                                                                <label class="h4 mb-2 text-gray-800"
                                                                                    for="">Ymax7</label>
                                                                                <input type="text"
                                                                                    class="form-control"
                                                                                    value="{{ $dailyBouns->ymax7 }}"
                                                                                    name="ymax7">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-sm">
                                                                        </div>
                                                                        <div class="col-sm">
                                                                        </div>
                                                                    </div>

                                                                    <br>
                                                                    <h1 class="h3 mb-4 text-gray-800">If P < 30
                                                                            then:</h1>
                                                                            <div class="row">
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="h4 mb-2 text-gray-800"
                                                                                            for="">Ymin8
                                                                                        </label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $dailyBouns->ymin8 }}"
                                                                                            name="ymin8">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                    <div class="form-group">
                                                                                        <label
                                                                                            class="h4 mb-2 text-gray-800"
                                                                                            for="">Ymax8</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            value="{{ $dailyBouns->ymax8 }}"
                                                                                            name="ymax8">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                </div>
                                                                                <div class="col-sm">
                                                                                </div>
                                                                            </div>

                                                                            <br>
                                                                            <h1 class="h3 mb-4 text-gray-800">If P < 40
                                                                                    then:</h1>
                                                                                    <div class="row">
                                                                                        <div class="col-sm">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="h4 mb-2 text-gray-800"
                                                                                                    for="">Ymin9
                                                                                                </label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    value="{{ $dailyBouns->ymin9 }}"
                                                                                                    name="ymin9">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm">
                                                                                            <div class="form-group">
                                                                                                <label
                                                                                                    class="h4 mb-2 text-gray-800"
                                                                                                    for="">Ymax9</label>
                                                                                                <input type="text"
                                                                                                    class="form-control"
                                                                                                    value="{{ $dailyBouns->ymax9 }}"
                                                                                                    name="ymax9">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-sm">
                                                                                        </div>
                                                                                        <div class="col-sm">
                                                                                        </div>
                                                                                    </div>

                                                                                    {{-- <h1 class="h2 mb-4 text-gray-800">Rewards:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <button id="addBtn">+</button>
                        <div id="inputContainer" ></div>
                    </div>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div> --}}
                                                                                    <button type="submit"
                                                                                        class="btn btn-primary float-right export-btn btn-save-dis">Update</button>
        </form>
    </div>
</div>
<script>
    document.getElementById("addBtn").addEventListener("click", function(e) {
        e.preventDefault();
        var input = document.createElement("input");
        input.type = "text";
        input.name = "levels[]";
        document.getElementById("inputContainer").appendChild(input);
    });
</script>
<!-- --------End of Category--------- -->
@include('Layoutspage.footer')
