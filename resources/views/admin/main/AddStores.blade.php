@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container">
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Stores</h1>
        <h3 class="h4 mb-4 text-gray-800">Store Name</h3>

        <form action="{{ url('/storeAddStores') }}" method="POST"enctype="multipart/form-data">
            @csrf
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control" id="name" name="name" placeholder=" Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
           
        </div>


    </div>
 <div class="container-fluid box-salect">
        <div class="row sup-file">
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Latitude</h3>
                <input type="text" class="form-control" id="lat" name="lat" placeholder="lat coordinate">
            </div>
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Longitude</h3>
                <input type="text" class="form-control" id="long" name="long" placeholder="lat coordinate">
            </div>

        </div>
      
    </div>
    <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>

    </form>
</div>@include('Layoutspage.footer')

