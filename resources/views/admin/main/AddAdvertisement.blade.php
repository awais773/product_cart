@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container">
    <div class="container-fluid">
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{{ $message }}</strong>
        </div>
        @endif

        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Advertisement</h1>
        <h3 class="h4 mb-4 text-gray-800">Title</Title></h3>
 
        <form action="{{ url('/storeAdvertisement')}}" method="POST" enctype="multipart/form-data"  >
            @csrf
            <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder="English Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                </div>
            </div>
           
        </div>
        <div class="col-6">
            <h3 class="h4 mb-4 text-gray-800">File Upload</h3>
                <input type="file" name="image" accept="image/*" id="image">
        </div>
        <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>

    </form>

    </div>
</div>@include('Layoutspage.footer')

