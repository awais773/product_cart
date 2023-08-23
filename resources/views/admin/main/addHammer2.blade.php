@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<!-- --------Category--------- -->
<style>
    /* Add styles for the animal length input */
    #total_animal {
        width: 100%;
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        margin-bottom: 20px;
    }

    /* Add styles for the probability inputs */
    #probability_container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 20px;
    }

    #probability_container label {
        font-size: 16px;
        font-weight: bold;
    }

    #probability_container input {
        width: calc(100% - 100px);
        padding: 10px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
    }

    #probability_container input[type="text"] {
        width: 100%;
    }

    /* Add styles for the submit button */
    button[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Add media queries for smaller screens */
    @media (max-width: 768px) {
        form {
            max-width: 100%;
        }

        #probability_container input {
            width: calc(100% - 80px);
        }
    }
</style>


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
        <h1 class="h2 mb-4 text-gray-800" style="border-bottom: 2px solid grey;" >Hammer 2</h1>
        <form action="{{ url('Hammerupdate', $dailyBouns->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="HammerName">Hammer Name </label>
                        <input type="text" class="form-control" value="{{$dailyBouns->HammerName}}" name="HammerName"
                          >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Price </label>
                        <input type="text" class="form-control" value="{{$dailyBouns->Price }}" name="Price"
                          >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Hammer Index </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->HammerIndex }}" name="HammerIndex"
                           >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Strenght </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Strenght }}" name="Strenght"
                           >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="Power">Power </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Power }}" name="Power"
                         >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Damage</label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Damage }}" name="Damage"
                         >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Gold </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Gold }}" name="Gold"
                           >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="Power">Gem </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Gem }}" name="Gem"
                         >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Diamond</label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Diamond }}" name="Diamond"
                          >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Health </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->Health }}" name="Health" >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">IsUnlocked </label>
                        <input type="text" class="form-control" value="{{ $dailyBouns->IsUnlocked }}" name="IsUnlocked"
                           >
                        {{-- <small value="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                </div>
            </div>
          
            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
        </form>
    </div>
</div>

<!-- --------End of Category--------- -->
@include('Layoutspage.footer')


  