@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
   <!-- --------Category--------- -->
   <div class="main-sub">
    <div class="container-fluid">
      @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
      </div>
      @endif
        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Add Category</h1>
        <h3 class="h4 mb-4 text-gray-800">Product Family Name </h3>
            <form action="{{ url('/storeCategory')}}" method="POST" >
             @csrf
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="English Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="germany_name" name="germany_name" placeholder="German Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="hebrew_name" name="hebrew_name" placeholder="Hebrew Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
        </form>

    </div>
  </div>
   
   <!-- --------End of Category--------- -->
@include('Layoutspage.footer')

