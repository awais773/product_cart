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
        <h1 class="h2 mb-4 text-gray-800">Edit Configration</h1>
        <form action="{{ route('configrations.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Animals </label>
                        <input type="text" class="form-control" value="{{ $category->animal_length }}" name="animal_length">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Hitpoints </label>
                        <input type="text" class="form-control" value="{{ $category->hitpoints }}" name="hitpoints">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Max Timer </label>
                        <input type="text" class="form-control" value="{{ $category->max_timer }}" name="max_timer">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Animals Visible </label>
                        <input type="text" class="form-control" value="{{ $category->animal_visibility }}" name="animal_visibility">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Animals Shown </label>
                        <input type="text" class="form-control" value="{{ $category->animal_shown }}" name="animal_shown">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">TBA </label>
                        <input type="text" class="form-control" value="{{ $category->tba1 }}" name="tba1">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">TBA2 </label>
                        <input type="text" class="form-control" value="{{ $category->tba2 }}" name="tba2">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="total_animal">Total Animal </label>
                        <input type="text" class="form-control" value="{{ $category->total_animal }}"
                         id="total_animal"   name="total_animal">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">level no </label>
                        <input type="text" class="form-control" value="{{ $category->level_no }}" name="level_no">
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
                        <input type="text" class="form-control" value="{{ $category->ap1 }}" name="ap1">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">AP2 </label>
                        <input type="text" class="form-control" value="{{ $category->ap2 }}" name="ap2">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G1 </label>
                        <input type="text" class="form-control" value="{{ $category->g1 }}" name="g1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">G2</label>
                        <input type="text" class="form-control" value="{{ $category->g2 }}" name="g2">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D1 </label>
                        <input type="text" class="form-control" value="{{ $category->d1 }}" name="d1">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">D2 </label>
                        <input type="text" class="form-control" value="{{ $category->d2 }}" name="d2">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E1 </label>
                        <input type="text" class="form-control" value="{{ $category->e1 }}" name="e1">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">E2 </label>
                        <input type="text" class="form-control" value="{{ $category->e2 }}" name="e2">
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
                        <input type="text" class="form-control" value="{{ $category->mouse }}" name="mouse">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Bat </label>
                        <input type="text" class="form-control" value="{{ $category->bat }}" name="bat">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Rooster </label>
                        <input type="text" class="form-control" value="{{ $category->rooster }}" name="rooster">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Dog</label>
                        <input type="text" class="form-control" value="{{ $category->dog }}" name="dog">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Crab </label>
                        <input type="text" class="form-control" value="{{ $category->crab }}" name="crab">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Snake </label>
                        <input type="text" class="form-control" value="{{ $category->snake }}" name="snake">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Wolf </label>
                        <input type="text" class="form-control" value="{{ $category->wolf }}" name="wolf">
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Rhino </label>
                        <input type="text" class="form-control" value="{{ $category->rhino }}" name="rhino">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Crocodile </label>
                        <input type="text" class="form-control" value="{{ $category->crocodile }}" name="crocodile">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Bear </label>
                        <input type="text" class="form-control" value="{{ $category->bear }}" name="bear">
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
                        <input type="text" class="form-control" value="{{ $category->xs1 }}"name="xs1">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">XS2 </label>
                        <input type="text" class="form-control" value="{{ $category->xs2 }}" name="xs2">
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
                        <label class="h4 mb-2 text-gray-800" for="">Level Configuration: </label>
                        <select id="level_configation" name="level_configation"  class="select2 form-control">
                            <option <?php if($category->level_configation==='Wood 1'){ echo 'selected';}?>>Wood 1</option>
                            <option <?php if($category->level_configation==='Wood 2'){ echo 'selected';}?>>Wood 2</option>
                            <option <?php if($category->level_configation==='Wood 3'){ echo 'selected';}?>>Wood 3</option>
                            <option <?php if($category->level_configation==='Iron 1'){ echo 'selected';}?>>Iron 1</option>
                            <option <?php if($category->level_configation==='Iron 2'){ echo 'selected';}?>>Iron 2</option>
                            <option <?php if($category->level_configation==='Iron 3'){ echo 'selected';}?>>Iron 3</option>

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
                            @if ($category->probability && isset($category->probability['data']))
                              @foreach($category->probability['data'] as $key => $probability)
                                <label for="probability_{{ $key + 1 }}">Probability {{ $key + 1 }}</label>
                                <input type="text" class="form-control" name="probability[data][]" id="probability_{{ $key + 1 }}" value="{{ $probability }}" required>
                              @endforeach
                            @endif
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
                        <textarea type="text" class="form-control" value="{{ $category->note }}" name="note"> </textarea>
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
      const probabilityContainer = document.getElementById("probability_container");
      const totalAnimalInput = document.getElementById("total_animal");
  
      totalAnimalInput.addEventListener("input", function() {
        const animalLength = parseInt(this.value);
        if (isNaN(animalLength) || animalLength <= 0) {
          // Invalid input, clear the probability fields
          probabilityContainer.innerHTML = "";
        } else {
          // Valid input, add or update the probability fields
          const existingInputs = probabilityContainer.querySelectorAll("input[type=text]");
          if (existingInputs.length > animalLength) {
            // Remove excess inputs
            for (let i = existingInputs.length - 1; i >= animalLength; i--) {
              const input = existingInputs[i];
              input.parentNode.removeChild(input.previousElementSibling); // Remove the label
              input.parentNode.removeChild(input); // Remove the input
            }
          }
          for (let i = 1; i <= animalLength; i++) {
            const probabilityLabel = probabilityContainer.querySelector("label[for=probability_" + i + "]");
            const probabilityInput = probabilityContainer.querySelector("#probability_" + i);
            if (!probabilityInput) {
              // Add a new input
              const newProbabilityLabel = document.createElement("label");
              newProbabilityLabel.for = "probability_" + i;
              newProbabilityLabel.innerText = "Probability " + i;
              probabilityContainer.appendChild(newProbabilityLabel);
              const newProbabilityInput = document.createElement("input");
              newProbabilityInput.type = "text";
              newProbabilityInput.name = "probability[data][]";
              newProbabilityInput.id = "probability_" + i;
              newProbabilityInput.required = true;
              probabilityContainer.appendChild(newProbabilityInput);
            } else if (probabilityLabel.innerText !== "Probability " + i) {
              // Update the label
              probabilityLabel.innerText = "Probability " + i;
            }
          }
        }
      });
    });
  </script>