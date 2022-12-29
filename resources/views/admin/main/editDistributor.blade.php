@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h2 mb-4 text-gray-800">Add Distribution</h1>
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
    <h3 class="h4 mb-4 text-gray-800">Distributor Name <span class="star">*</span></h3>
    <form action="{{ route('distributors.update',$distributer->id) }}" method="POST"enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <input type="text" class="form-control" value="{{ $distributer->name }}" name="name" aria-describedby="emailHelp"
                        placeholder="English Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small>  --}}
                </div>
            </div>
          
        </div>
        <div class="contaner distribut-pic">
            <h1 class="h2 mb-4 text-gray-800">Distributor Logo/Icon</h1>
            <div class="">
                <h3 class="h4 mb-4 text-gray-800">File Upload</h3>
                    <input type="file" id="image" name="image">
                    <img width="100" style="margin-bottom:9px" height="80" src="{{ asset('distributorImage/'.$distributer->image) }}" alt="" srcset="">
            </div>
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
        </div>
    </form>
</div>
@include('Layoutspage.footer')
