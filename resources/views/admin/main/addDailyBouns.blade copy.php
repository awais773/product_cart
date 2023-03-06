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
        <form action="{{ url('/adddailyBouns') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">X </label>
                        <input type="text" class="form-control" id="x" name="x" placeholder="X  Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Y </label>
                        <input type="text" class="form-control" id="y" name="y" placeholder="Y Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    {{-- <div class="form-group">
                  <label class="h4 mb-2 text-gray-800" for="">Max Timer </label>
                    <input type="text" class="form-control" id="mt" name="mt" placeholder="Max Timer Name">
                  </div> --}}
                </div>
            </div>
            <br>
            <h1 class="h2 mb-4 text-gray-800">Rewards:</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <button id="addBtn">+</button>
                        <div id="inputContainer"></div>
                    </div>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                    {{-- <div class="form-group">
                  <label class="h4 mb-2 text-gray-800" for="">Max Timer </label>
                    <input type="text" class="form-control" id="mt" name="mt" placeholder="Max Timer Name">
                  </div> --}}
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Z </label>
                        <input type="text" class="form-control" id="z" name="z" placeholder="Z Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Advance levels </label>
                        <input type="text" class="form-control" id="advance_level" name="advance_level"
                            placeholder="levels Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Complete Level </label>
                        <input type="text" class="form-control" id="complete_level" name="complete_level"
                            placeholder="level Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">show Advertising </label>
                        <input type="text" class="form-control" id="show_advertising" name="show_advertising"
                            placeholder="Advertising Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
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
