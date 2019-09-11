<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" type="image/x-icon" href="{{asset('1566363495.ico')}}">
  <title>Leave App Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('ui/frontend/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Please Update Your Password!</h1>
                  </div>
                  <form method="POST" action="" class="user">
                    @csrf
                    <div class="form-group">
                        <input id="old_password" type="password" class="form-control form-control-user" name="old_password" value="{{ old('old_password') }}" required placeholder="Enter Old Password...">

                    </div>
                    <div class="form-group">
                            <input id="new_password" type="password" class="form-control form-control-user" name="new_password" required autocomplete="current-password" placeholder="Enter New Password...">
                            <input type="hidden" value="{{$user->id}}" id="user_id">
                    </div>
                      <button type="submit" id="update" class="btn btn-primary btn-user btn-block">Submit</button>
                    </a>
                    <hr>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{ asset('ui/frontend/js/all/config.js') }}"></script>
  <script src="{{asset('ui/frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('ui/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('ui/frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('ui/frontend/js/sb-admin-2.min.js')}}"></script>
  <script>
  
  var userRoute = "{{ route('login')}}";

    $(document).on('click','#update',(e) =>{
      update();
      e.preventDefault();
  })  

  function update(){
    let id   = $("#user_id").val();
    let old_password = $("#old_password").val();
    let new_password = $("#new_password").val();
    $.ajax({
        type : "put",
        data : {old_password,new_password},
        url : API_BASE_URL + '/api/user/password-update/'+id,
        success : (data) =>{
          window.location.href = userRoute;
        }
    });
} 

  </script>
</body>

</html>