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
        <h1 class="h2 mb-4 text-gray-800">Add Configration</h1>
        <form action="{{ url('/storeConfigration') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="animal_length">Animals </label>
                        <input type="text" class="form-control" id="animal_length" name="animal_length"
                            placeholder="Animals Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Hitpoints </label>
                        <input type="text" class="form-control" id="hitpoints" name="hitpoints"
                            placeholder="Hitpoints Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Max Timer </label>
                        <input type="text" class="form-control" id="max_timer" name="max_timer"
                            placeholder="Max Timer Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Animals Visible </label>
                        <input type="text" class="form-control" id="animal_visibility" name="animal_visibility"
                            placeholder="Animals  Visible Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Animals Shown </label>
                        <input type="text" class="form-control" id="animal_shown" name="animal_shown"
                            placeholder="Animals Shown Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">TBA1 </label>
                        <input type="text" class="form-control" id="tba1" name="tba1" placeholder="TBA Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">TBA2 </label>
                        <input type="text" class="form-control" id="tba2" name="tba2"
                            placeholder="TBA2 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="total_animal">Total Animal </label>
                        <input type="text" class="form-control" id="total_animal" name="total_animal"
                            placeholder="Total Animal Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">level no </label>
                        <input type="text" class="form-control" id="level_no" name="level_no"
                            placeholder="level No Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>

            <br>
            <br>
            <h1 class="h2 mb-4 text-gray-800">Costs :</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">AP1 </label>
                        <input type="text" class="form-control" id="ap1" name="ap1"
                            placeholder="AP1 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">AP2 </label>
                        <input type="text" class="form-control" id="ap2" name="ap2"
                            placeholder="AP2 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G1 </label>
                        <input type="text" class="form-control" id="g1" name="g1"
                            placeholder="G1 Name">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G2 </label>
                        <input type="text" class="form-control" id="g2" name="g2"
                            placeholder="G2 Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D1 </label>
                        <input type="text" class="form-control" id="d1" name="d1"
                            placeholder="D1 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D2 </label>
                        <input type="text" class="form-control" id="d2" name="d2"
                            placeholder="D2 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E1 </label>
                        <input type="text" class="form-control" id="e1" name="e1"
                            placeholder="E1 Name">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E2 </label>
                        <input type="text" class="form-control" id="e2" name="e2"
                            placeholder="E2 Name">
                    </div>
                </div>
            </div>

            <br>
            <br>
            <h1 class="h2 mb-4 text-gray-800">Animals Information :</h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Mouse </label>
                        <input type="text" class="form-control" id="mouse" name="mouse"
                            placeholder="Mouse Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Bat </label>
                        <input type="text" class="form-control" id="bat" name="bat"
                            placeholder="bat Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Rooster </label>
                        <input type="text" class="form-control" id="rooster" name="rooster"
                            placeholder="Rooster Name">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Dog </label>
                        <input type="text" class="form-control" id="dog" name="dog"
                            placeholder="Dog Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Crab </label>
                        <input type="text" class="form-control" id="crab" name="crab"
                            placeholder="Crab Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Snake </label>
                        <input type="text" class="form-control" id="snake" name="snake"
                            placeholder="Snake Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Wolf </label>
                        <input type="text" class="form-control" id="wolf" name="wolf"
                            placeholder="Wolf Name">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Rhino </label>
                        <input type="text" class="form-control" id="rhino" name="rhino"
                            placeholder="Rhino Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Crocodile </label>
                        <input type="text" class="form-control" id="crocodile" name="crocodile"
                            placeholder="Crocodile Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Bear </label>
                        <input type="text" class="form-control" id="bear" name="bear"
                            placeholder="Bear Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                </div>
                <div class="col-sm">
                </div>
            </div>

            <br>
            <br>

            <h1 class="h2 mb-4 text-gray-800">Rewards: </h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">XS1 </label>
                        <input type="text" class="form-control" id="xs1" name="xs1"
                            placeholder="RLC1 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">XS2 </label>
                        <input type="text" class="form-control" id="xs2" name="xs2"
                            placeholder="XS1 Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Level Configuration:</label>
                        <select id="level_configation" name="level_configation" class="select2 form-control">
                            <option>Choose One..</option>
                            <option>Wood 1</option>
                            <option>Wood 2</option>
                            <option>Wood 3</option>
                            <option>Iron 1</option>
                            <option>Iron 2</option>
                            <option>Iron 3</option>
                        </select>
                    </div>
                </div>

                <div class="col-sm">

                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                </div>
            </div>
            <br>
            <h1 class="h2 mb-4 text-gray-800">Probability List: </h1>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <div id="probability_container">
                            <!-- Probability fields will be added here -->
                        </div>
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                </div>
                <div class="col-sm">

                </div>
                <div class="col-sm">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Note </label>
                        <textarea type="text" class="form-control" id="note" name="note" placeholder="Note Name"> </textarea>
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const probabilityContainer = document.getElementById("probability_container");
        const totalAnimalInput = document.getElementById("total_animal");

        // Get existing probability data if available
        const existingData = JSON.parse('{{ json_encode($probabilityData ?? []) }}');

        // Update probability fields when the total animal input changes
        totalAnimalInput.addEventListener("input", function() {
            const animalLength = parseInt(this.value);
            if (isNaN(animalLength) || animalLength <= 0) {
                // Invalid input, clear the probability fields
                probabilityContainer.innerHTML = "";
            } else {
                // Valid input, add or update the probability fields
                // Remove any existing probability fields first
                probabilityContainer.innerHTML = "";
                for (let i = 1; i <= animalLength; i++) {
                    const probabilityLabel = document.createElement("label");
                    probabilityLabel.for = "probability_" + i;
                    probabilityLabel.innerText = "Probability " + i;
                    probabilityContainer.appendChild(probabilityLabel);
                    const probabilityInput = document.createElement("input");
                    probabilityInput.type = "text";
                    probabilityInput.name = "probability[data][" + i + "]";
                    probabilityInput.id = "probability_" + i;
                    probabilityInput.required = true;
                    // Pre-fill existing probability data if available
                    if (existingData[i]) {
                        probabilityInput.value = existingData[i];
                    }
                    probabilityContainer.appendChild(probabilityInput);
                }
            }
        });

        // Trigger the input event to pre-fill the probability fields on page load
        totalAnimalInput.dispatchEvent(new Event("input"));
    });
</script>


{{-- //  this old  // --}}

{{-- <script>
    document.addEventListener("DOMContentLoaded", function() {
      const probabilityContainer = document.getElementById("probability_container");
      
      document.getElementById("animal_length").addEventListener("input", function() {
        const animalLength = parseInt(this.value);
        if (isNaN(animalLength) || animalLength <= 0) {
          // Invalid input, clear the probability fields
          probabilityContainer.innerHTML = "";
        } else {
          // Valid input, add the probability fields
          const headingInput = document.createElement("input");
          for (let i = 1; i <= animalLength; i++) {
            const probabilityLabel = document.createElement("label");
            probabilityLabel.for = "probability_" + i;
            probabilityLabel.innerText = "Probability " + i;
            probabilityContainer.appendChild(probabilityLabel);
            const probabilityInput = document.createElement("input");
            probabilityInput.type = "text";
            probabilityInput.name = "probability[data][" + i + "]";
            probabilityInput.id = "probability_" + i;
            probabilityInput.required = true;
            probabilityContainer.appendChild(probabilityInput);
          }
        }
      });
    });
  </script> --}}
