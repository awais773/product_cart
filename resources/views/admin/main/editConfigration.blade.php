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
        <form action="{{ route('product.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="animal_length">Title </label>
                        <input type="text" class="form-control" value="{{$category->title }}" name="title"
                            placeholder="title Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>

                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Price </label>
                        <input type="number" class="form-control" value="{{ $category->price }}" name="price"
                            placeholder="price Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">Category </label>
                        <input type="text" class="form-control" value="{{ $category->category }}" name="category"
                            placeholder="category Name">
                        {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm">
                    <div class="form-group">
                        <label class="h4 mb-2 text-gray-800" for="">image </label>
                        <input type="file" name="image" accept="image/*" id="image">
                    </div>
                </div>

                <div class="col-sm">
                    
                </div>
                <div class="col-sm">
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