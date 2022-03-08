@extends('layouts.frontend')

@section('content')

<!doctype html>
<html lang="en">
  <head>
  	<title>UMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
		<form method="POST" action="{{ route('login') }}" >
            @csrf
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
		
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url('images/bg-02.jpg');">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign In With Your ID</h3>
			      	
							<form action="{{ route('login') }}" class="signin-form">
			      		<div class="form-group mb-3">
			      			<label class="label" for="name">Email Address</label>
			      			<input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="emailaddress" placeholder="email@example.com">
							 @error('email')
							  <p class="text-red-500 text-xs italic">{{ $message }}</p>
					         @enderror
						</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
						<input class="shadow appearance-none border @error('password') border-red-500 @enderror rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password" id="password" placeholder="******************">
						@error('password')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
					</div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" >
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<a href="{{ route('password.update') }}">Forgot Password?</a>
									</div>
		            </div>
		          </form>
		          <p class="text-center">Not a member? <a data-toggle="tab" href="{{ route('register') }}">Sign Up</a></p>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>


	
</html>
@endsection

