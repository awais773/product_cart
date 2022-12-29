@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
   <!-- --------Category--------- -->
   <div class="main-sub">
    <div class="container-fluid">
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
        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Add Category</h1>
        <h3 class="h4 mb-4 text-gray-800">Product Family Name <span class="star">*</span></h3>
            <form action="{{ route('categories.update',$category->id) }}" method="POST" >
              @csrf
            @method('PUT')
            <div class="row">
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{$category->name }}" name="name" placeholder="English Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $category->germany_name }}" name="germany_name" placeholder="German Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
              <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $category->hebrew_name }}" name="hebrew_name" placeholder="Hebrew Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                  </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Update</button>
        </form>

    </div>
  </div>
   
   <!-- --------End of Category--------- -->
@include('Layoutspage.footer')

