@include('Layoutspage.Head')
@include('Layoutspage.sidebar')

<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h2 mb-4 text-gray-800">Add Product</h1>
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
        <h3 class="h4 mb-4 text-gray-800">Product Name <span class="star">*</span></h3>
    <form action="{{url('/storePrduct')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="English Name">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="germany_name" name="germany_name" placeholder="German Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="hebrew_name" name="hebrew_name" placeholder="Hebrew Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>


    </div>
    <div class="container-fluid box-salect">
        <div class="row">

            <div class="col-3 col-md col-sm-12 check-box">
                <h3 class="h5 text-gray-800 ">Salect Distribution</h3>
                @foreach ($distributers as $distributer)
                <div class="form-group">
                    <label><input style="margin: 0px 10px 0px 0px;"type="checkbox" name="distributer_id" value="{{$distributer->id}}">{{ $distributer->name }}</label>
                </div> 
                @endforeach
            </div>

            <div class="col-4 col-md col-sm-12 check-box">
                <h3 class="h5  text-gray-800">Salect Categories</h3>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwosweet" aria-expanded="true" aria-controls="collapseTwosweet">
                        <span>SWEETS</span>
                    </a>
                    <div id="collapseTwosweet" class="collapse inner-collap" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="col">
                            <select id="category_id" name="category_id" class="select2 form-control">
                                <option>Choose One..</option>
                            @foreach($category as $categorys)
                              <option value="{{$categorys->id}}">{{$categorys->name}}{{$categorys->germany_name}}</option>
                              <option value="{{$categorys->id}}">{{$categorys->germany_name}}</option>
                              <option value="{{$categorys->id}}">{{$categorys->hebrew_name}}</option>
        
                            @endforeach
        
                            </select>
                        </div>
                    </div>
                </li>
              
            </div>

            <div class="col-4">
                <h3 class="h4 mb-4 text-gray-800">kosher Status <span class="star">*</span></h3>
                <div class="row mb-4">
                    <div class="col">
                        <select id="kosher_status" name="kosher_status"  class="select2 form-control">
                            <option>Choose One..</option>
                            <option>Kosher</option>
                            <option>Not Kosher</option>
                        </select>
                    </div>
                 </div>
            </div>
        </div>

    </div>
    <div class="container-fluid box-salect">
        <div class="row ">
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Packaging</h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="packing" name="packing">
                    {{-- <small id="packaging" class="form-text text-muted"></small> --}}
                </div>
                <h3 class="h4 mb-4 text-gray-800">Barcode <span class="star">*</span></h3>
                <div class="form-group">
                    <input type="text" class="form-control" id="barcode" name="barcode">
                    {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                </div>
            </div>
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Diet</h3>
                <div class="row mb-4">
                    <div class="col">
                        <select id="diet" name="diet"  class="select2 form-control">
                            <option>Choose One..</option>
                            <option>Pavve</option>
                            <option>Milk</option>
                            <option>Meat</option>
                        </select>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <div class="container-fluid box-salect">

        <!-- Page Heading -->

        <h3 class="h4 mb-4 text-gray-800">Ingredients <span class="star">*</span></h3>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="ingredients_english" name="ingredients_english" placeholder="English Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="ingredients_germany" name="ingredients_germany" placeholder="German Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <input type="text" class="form-control" id="ingredients_hebrew" name="ingredients_hebrew" placeholder="Hebrew Name">
                    <small id="emailHelp" class="form-text text-muted"></small>
                </div>
            </div>
        </div>


    </div>
    <div class="container-fluid box-salect">

        <div class="row sup-file">
            <div class="col-6">
                <h3 class="h4 mb-4 text-gray-800">Supervisor</h3>
                <input type="text" class="form-control" id="supervisor" name="supervisor" placeholder="">
            </div>
            <div class="col-5">
                <h3 class="h4 mb-4 text-gray-800">File Upload</h3>
                    <input  type="file" name="image[]" accept="image/*"  id="inputImage"
                    multiple  name="filename[]">
            </div>

        </div>
    </div>
 
    <div class="container-fluid box-salect">

        <!-- Page Heading -->

        <h3 class="h4 mb-4 text-gray-800">Comments</h3>

        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="note">English:</label>
                    <textarea class="form-control" rows="3" id="note" name="note"></textarea>
                  </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="note">German:</label>
                    <textarea class="form-control" rows="3" id="note_germany" name="note_germany"></textarea>
                  </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="note">Hebrew:</label>
                    <textarea class="form-control" rows="3" id="note_hebrew" name="note_hebrew"></textarea>
                  </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>

    </form>
    </div>
</div>
@include('Layoutspage.footer')
