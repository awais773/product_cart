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
        <!-- Gold section -->
        <h1 class="h2 mb-4 text-gray-800" style="border-bottom: 2px solid grey;">Gold</h1>
        <form action="{{ url('Shopupdate', ['id' => $dailyBouns->id]) }}" method="POST">
            @csrf
            @method('PUT')
            @foreach ($data['Gold'] as $gold)
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="GoldPackName">GoldPackName</label>
                            <input type="text" class="form-control" value="{{ $gold['GoldPackName'] }}"
                                name="GoldPackName[]">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="Gold">Gold</label>
                            <input type="number" class="form-control" value="{{ $gold['Gold'] }}" name="Gold[]">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="price_in_diamond">Price in Diamond</label>
                            <input type="number" class="form-control" value="{{ $gold['Price in Diamond'] }}"
                                name="price_in_diamond[]">
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            <!-- ... Add more gold fields as needed ... -->

            <!-- Item section -->
            <h1 class="h2 mb-4 text-gray-800" style="border-bottom: 2px solid grey;">Item</h1>
            @foreach ($data['Items'] as $item)
                <div class="row">
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="ItemName">ItemName</label>
                            <input type="text" class="form-control" value="{{ $item['ItemName'] }}"
                                name="ItemName[]">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="Quantity">Quantity</label>
                            <input type="number" class="form-control" value="{{ $item['Quantity'] }}"
                                name="Quantity[]">
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="form-group">
                            <label class="h4 mb-2 text-gray-800" for="item_price_in_diamond">Item Price in
                                Diamond</label>
                            <input type="number" class="form-control" value="{{ $item['Price in Diamond'] }}"
                                name="item_price_in_diamond[]">
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            <!-- ... Add more item fields as needed ... -->

            <button type="submit" class="btn btn-primary float-right export-btn btn-save-dis">Save</button>
        </form>

    </div>
</div>

<!-- --------End of Category--------- -->
@include('Layoutspage.footer')
