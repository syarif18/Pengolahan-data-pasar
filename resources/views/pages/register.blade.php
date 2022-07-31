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
			<form action="/registrasi" method="post" onsubmit="return validate();">
				@csrf
				<img src="{{ asset('admin2_dashboard') }}/assets/img/pasar_rakyat.png">
				<h2 class="title">Buat Akun Baru</h2>
        <h6 class="sub-title">Silahkan Isi Data Anda dibawah ini dengan Benar</h6>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nama Lengkap</h5>
           		   		<input type="text" class="input" name="nama" required value="{{ old('nama') }}">
           		   </div>
           		</div>

                    <div class="div">
                            <input hidden type="text" class="input" name="level" value="user">
                    </div>

                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user-check"></i>
                    </div>
                    <div class="div">
                            <h5>Username</h5>
                            <input type="text" class="input" name="username" required value="{{ old('username') }}">
                    </div>
                 </div>

                {{-- <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-at"></i>
                    </div>
                    <div class="div">
                            <h5>Email</h5>
                            <input type="email" class="input" name="email" required value="{{ old('email') }}">
                    </div>
                 </div> --}}

           		<div class="input-div pass">
           		   <div class="i">
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password" required>
            	   </div>
            	</div>

                <div class="input-div pass">
                    <div class="i">
                         <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                         <h5>Masukkan Ulang Password</h5>
                         <input type="password" class="input" name="password1" id="password1" required>
                 </div>
              </div>
              <ul>

                <li>
                  <a class="forgot" href="{{ url('/') }}">Kembali</a>
                </li>
                <li>
                  <a class="new" href="{{ url('login') }}">Sudah Punya akun?</a>
                </li>
              </ul>
            	<input type="submit" class="btn" value="Register">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('admin2_dashboard') }}/assets/js/main-login.js"></script>
    {{-- @include('sweetalert::alert') --}}
</body>
<script>
    function validate(){
        var a = document.getElementById('password').value;
        var b = document.getElementById('password1').value;
        if (a!=b){
            alert("Password tidak sesuai!");
            return false;
        }
    }
</script>
</html>
