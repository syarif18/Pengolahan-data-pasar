<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('admin2_dashboard') }}/assets/css/style-login.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="{{ asset('admin2_dashboard') }}/assets/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="{{ asset('admin2_dashboard') }}/assets/img/login.png">
		</div>
		<div class="login-content">
			<form action="{{ route('postlogin') }}" method="post">
				@csrf
				<img src="{{ asset('admin2_dashboard') }}/assets/img/pasar_rakyat.png">
				<h2 class="title">Selamat Datang</h2>
        <h6 class="sub-title">Silahkan Anda Login Terlebih dahulu</h6>

            @if(session()->has('loginError'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <h5>{{ session('loginError') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <h5>{{ session('success') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif


           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input @error('username')
                                  is-invalid
                              @enderror" name="username">
                              @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
              <ul>
                <li>
                  <a class="forgot" href="/">Kembali ke halaman</a>
                </li>
                <li>
                  <a class="new" href="{{ url('registrasi') }}">Buat Akun Baru?</a>
                </li>
              </ul>
            	<input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('admin2_dashboard') }}/assets/js/main-login.js"></script>
</body>
</html>
