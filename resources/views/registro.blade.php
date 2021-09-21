<!DOCTYPE html>

<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Registro</title>

	<link href="{{ asset('css/registro.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        
	</head>
	
	<body>

		<div class="main">
				<div class="container middle">
					<div class="card card-1 vertical-middle">
						<div class="card-body">
							<div class="image-reg text-center">
								<img class="image-reg " src="images/logo-text.png" class="img-fluid" alt="sing up image">
							</div>
							<h2 class="form-title text-center font-weight-bold">SIGN UP</h2>
							<form action=" {{ route('register') }}" method="POST" class="register-form" id="register-form" autocomplete="off" enctype="multipart/form-data">
								@csrf	
								<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
									<label for="name"><i class="fas fa-user"></i></label>
									<input type="text" name="name" value="{{ old('name') }}" required placeholder="First Name"/>
									@if ($errors->has('name'))
										<span class="help-block">
											<strong>{{ $errors->first('name') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
									<label for="last_name"><i class="fas fa-user"></i></label>
									<input type="text" name="last_name" value="{{ old('last_name') }}" required placeholder="Last name "/>
									@if ($errors->has('last_name'))
										<span class="help-block">
											<strong>{{ $errors->first('last_name') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
									<label for="username"><i class="fas fa-user"></i></label>
									<input type="text" class="" value="{{ old('username') }}" required name="username" placeholder="User Name. Min 6. "/>
									@if ($errors->has('username'))
										<span class="help-block">
											<strong>{{ $errors->first('username') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
									<label for="email"><i class="fas fa-envelope"></i></label>
									<input type="email" value="{{ old('email') }}" required name="email"  placeholder="Email"/>
									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
									<label for="password"><i class="fas fa-unlock-alt"></i></i></label>
									<input type="password" required name="password"  placeholder="Password. Min 6. 1 upper, lower, number."/>
									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
								<div class="form-group">
									<label for="re-password_confirmation"><i class="fas fa-unlock"></i></label>
									<input type="password" name="password_confirmation" required placeholder="Confirm Password"/>
								</div>
								<div class="form-group custom-file">
									<input type="file" name="fileAvatar" class="custom-file-input" required>
									<label class="custom-file-label" for="avatar">Avatar Image</label>
								</div>
								<br>
								<br>
								<div class="form-group custom-file">
									<input type="file" name="filePortada" class="custom-file-input" required>
									<label class="custom-file-label" for="portada">Cover image</label>
								</div>
								
								<br>
								<br>
								
								<div class="form-group">
									<input type="submit" class="form-submit btn btn-primary btn-lg" value="Register"/>
								</div>

								
							</form>
							<div class="form-group text-center">
								<a href="{{ route('login') }}" class="signup-image-link">I´m a member. <strong>LOGIN</strong> </a>
							</div>
						</div>
					</div>
				</div>
		</div>
</body>
</html>
