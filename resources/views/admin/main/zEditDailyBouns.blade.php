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
        <h1 class="h2 mb-4 text-gray-800">Add Daily Bonusses</h1>
        <form action="{{ url('DailyBounsupdate',$dailyBouns->id) }}" method="POST" >
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
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Update</button>
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
