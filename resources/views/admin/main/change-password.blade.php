@include('Layoutspage.Head')
@include('Layoutspage.sidebar')
<div class="container">
    <div class="container-fluid">
        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-2 text-gray-800">Suggestions</h1> --}}
        <h1 class="h2 mb-4 text-gray-800">Profile Update</h1>
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
        <!-- DataTales Example -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Chnage Password') }}</div>
    
                        <form action="{{ url('change-passwords') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('error') }}
                                    </div>
                                @endif
    
                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                        placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                        placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                        placeholder="Confirm New Password">
                                </div>
    
                            </div>
    
                            <div class="card-footer">
                                <button class="btn btn-success">Submit</button>
                            </div>
    
                        </form>
                    </div>
                </div>
            </div>
        </div>
<script>
    $(function() {
      $('.toggle-class').change(function() {
          var status = $(this).prop('checked') == true ? 1 : 0; 
          var user_id = $(this).data('id'); 
           
          $.ajax({
              type: "GET",
              dataType: "json",
              url: '/changeStatus',
              data: {'status': status, 'user_id': user_id},
              success: function(data){
                console.log(data.success)
              }
          });
      })
    })
  </script>

@include('Layoutspage.footer')

