<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('masuk/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('masuk/css/owl.carousel.min.css') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('masuk/css/bootstrap.min.css') }}">
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('masuk/css/style.css') }}">

    <title>Kwarcab Kab. Bandung</title>
    <style>
       @media (max-width: 575.98px) {
      body {
        background-color: rgb(20,108,104);
        background-image: url('{{ asset('masuk/images/bg_1.jpg') }}');
        background-size: contain;
        background-repeat: no-repeat;
      }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
      body {
        background-color: rgb(20,108,104);
        background-image: url('{{ asset('masuk/images/bg_1.jpg') }}');
        background-size: contain;
        background-repeat: no-repeat;
      }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
      body {
        background-color: rgb(20,108,104);
        background-image: url('{{ asset('masuk/images/bg_1.jpg') }}');
        background-size: contain;
        background-repeat: no-repeat;
      }
    }

    @media (min-width: 992px) and (max-width: 1199.98px) {
      body {
        background-image: url('{{ asset('masuk/images/bg_1.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
      }
    }

    @media (min-width: 1200px) {
      body {
        background-image: url('{{ asset('masuk/images/bg_1.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
      }
    }

    .disabled-cursor {
      cursor: not-allowed;
    }

    .shadow-offset {
      box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.2);
    }
    </style>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <!-- /* <img src="images/bg_1.jpg" alt="Image" class="img-fluid"> */ -->
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4"><br><br><br>
              <h3><font style="-webkit-text-stroke: 0.02em #fff;">Masuk</font></h3>
              <p class="mb-4"><font style="color:#fff;font-size:20pt;-webkit-text-stroke: 0.03em #000;"><b>Sistem Pengelolaan Anggota Pramuka Kab.Bandung</b></font></p>
            </div>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
            @endif
            <form method="POST" action="{{ route('login') }}">
                    @csrf
              <div class="form-group first">
                <label for="username">Email</label>
                <input id="email" type="email" class="form-control @error('nik') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="">
                    @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
              </div>
              <div class="form-group last mb-4">
                <label for="password">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder=""  id="myInput" required>
                    @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                    @enderror
              </div>
              
              <!-- <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
                 <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  
              </div> -->
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption"><font style="color:#fff;-webkit-text-stroke: 0.03em #000;"><b>Lihat Password</b></font></span>
                  <input type="checkbox"  onclick="myFunction()"/>
                  <div class="control__indicator"></div>
                </label>
                <!-- <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span>  -->
              </div>

              <input type="submit" value="Masuk" class="btn btn-block btn-primary">
              </form>
             

              <!-- <span class="d-block text-left my-4 text-muted">&mdash; or login with &mdash;</span>
              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div> -->
            
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
  <script>
        function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
    </script>

  
    <script src="{{ asset('masuk/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('masuk/js/popper.min.js') }}"></script>
    <script src="{{ asset('masuk/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('masuk/js/main.js') }}"></script>
  </body>
</html>