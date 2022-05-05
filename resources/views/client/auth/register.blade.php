<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
<!--===============================================================================================-->	
    <link rel="icon" type="image/png" href="{{ asset('login/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="{{ asset('login/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('login/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('dist/css/general.css') }}">
</head>
<body>
    
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="{{ route('register-client-form') }}" method="POST">
                    @csrf
					<span class="login100-form-title p-b-70">
						Đăng ký thành viên
					</span>
					<span class="login100-form-avatar">
						<img src="{{ asset('login/images/avatar-01.jpg') }}" alt="AVATAR">
					</span>

                    @if (session()->has('messageSuccess'))
                        <br>
                        <div class="text-center red-text">{{ session()->get('messageSuccess') }}</div>
                    @endif

                    @if ($errors->has('email'))
                        <div class="red-text">{{ $errors->first('email') }}</div>
                    @endif
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Hãy nhập email">
						<input class="input100" type="email" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

                    @if ($errors->has('name'))
                        <div class="red-text">{{ $errors->first('name') }}</div>
                    @endif
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Hãy nhập họ tên">
						<input class="input100" type="text" name="name">
						<span class="focus-input100" data-placeholder="Họ tên"></span>
					</div>

                    @if ($errors->has('phone'))
                        <div class="red-text">{{ $errors->first('phone') }}</div>
                    @endif
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Hãy nhập điện thoại">
						<input class="input100" type="number" name="phone">
						<span class="focus-input100" data-placeholder="Điện thoại"></span>
					</div>

                    @if ($errors->has('address'))
                        <div class="red-text">{{ $errors->first('address') }}</div>
                    @endif
					<div class="wrap-input100 validate-input m-b-35" data-validate = "Hãy nhập địa chỉ">
						<input class="input100" type="text" name="address">
						<span class="focus-input100" data-placeholder="Địa chỉ"></span>
					</div>

                    @if ($errors->has('password'))
                        <div class="red-text">{{ $errors->first('password') }}</div>
                    @endif
					<div class="wrap-input100 validate-input m-b-35" data-validate="Hãy nhập mật khẩu">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Mật khẩu"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Đăng ký
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li>
							<span class="txt1">
								Bạn đã có tài khoản?
							</span>

							<a href="{{ route('login-client') }}" class="txt2">
								Đăng nhập
							</a>
						</li>

						<li class="m-b-8">
							<span class="txt1">
								Trở lại
							</span>

							<a href="{{ route('home') }}" class="txt2">
								Trang chủ
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>

	<div id="dropDownSelect1"></div>
    
    <script src="{{ asset('login/js/main.js') }}"></script>

    <script src="{{ asset('login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('login/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('login/js/main.js') }}"></script>
</body>
</html>