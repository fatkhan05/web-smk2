{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{asset("css/registers.css")}}">
</head>
<body>
	<div class="box">
		<form autocomplete="off">
			<h2>Register</h2>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Name</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Userame</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="text" required="required">
				<span>Email</span>
				<i></i>
			</div>
			<div class="inputBox">
				<input type="password" required="required">
				<span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Already Have an Account ?</a>
				<a href="#">Signup</a>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
</body>
</html> --}}







@extends('layouts.main2')
@section('container2')

<div class="row justify-content-center"> 
  <div class="col-md-5"> 
      <main class="card shadow form-register p-3 mt-5 mb-5"> 
          <h1 class="h3 mb-3 fw-normal text-center">Form Registration</h1> 
          <form action="/register" method="POST">
              @csrf
          <div class="form-floating mt-2"> 
              <input type="text" name="name" class="form-control rounded-top" @error('name') is-invalid @enderror
              id="name" placeholder="name" required value="{{old('name')}}"> 
              <label for="name">Name</label> 
              @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
          </div> 
          <div class="form-floating mt-2">
              <input type="text" name="username" class="form-control" id="username" placeholder="username"> 
              <label for="username">username</label> 
          </div> 
          <div class="form-floating mt-2"> 
              <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com"> 
              <label for="email">Email address</label> 
          </div> 
          <div class="form-floating mt-2"> 
              <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
              <label for="password">Password</label> 
          </div> 
          <div class="text-center">
              <button class="w-100 btn btn-lg btn-primary mb-5 mt-3" type="submit">Masuk</button> 
          </div>
          <small>Not Registered!<a href="/register">Register Now!</a></small> 
      </form> 
  </main> 
</div> 
</body> 
</html>


@endsection
