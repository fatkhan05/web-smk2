{{-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="{{asset("css/login.css")}}">
</head>
<body>

  <div class="row justify-content-center">
    <div class="col-md-4">
      @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
      @endif
  
          @if(session()->has('LoginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('LoginError')}}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <form action="/login" method="post">   
            @csrf   
	<div class="box">
		<form autocomplete="off">
			<h2>Sign in</h2>
			<div class="inputBox">
				<input type="text" required="required">
        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
				<span>Email</span>
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
         </div>
       @enderror
				<i></i>
			</div>
			<div class="inputBox">
        
        <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
				<label for="floatingPassword">Password</label>
        <span>Password</span>
				<i></i>
			</div>
			<div class="links">
				<a href="#">Forgot Password ?</a>
				<a href="#">Signup</a>
			</div>
			<input type="submit" value="Login">
		</form>
	</div>
          </form>
</body>
</html>  --}}





@extends('layouts.main2')
@section('container2')

    <style>
        .card {
            background-color:;
            margin-bottom: 5rem;
            margin-top: 5rem;
        }
        .btn {
            border-radius: 50px;
        }
    </style>

    
        <div class="row justify-content-center">
            <div class="col-md-4">
              @if(session()->has('success'))
                  <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{session('success')}}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
          
                  @if(session()->has('LoginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{session('LoginError')}}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  @endif

                  <div class="card shadow card-body">
              <main class="form-signin">
                <form action="/login" method="post">
                  @csrf
                  <h1 class="h3 mb-5 mt-3 fw-normal text-center">Please Login</h1>              
                  <div class="form-floating mb-3">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{old('email')}}">
                    <label for="floatingInput">Email Addres</label>
                    @error('email')
                      <div class="invalid-feedback">
                       {{ $message }}
                      </div>
                    @enderror
                  </div>
                  <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
          
                  </div>
                         
                  <button class="w-100 btn btn-lg btn-primary mt-3 " type="submit">Login</button>
                  
                  <section class="mb-5 text-dark"><small>Not Registered!<a href="/register">Register Now!</a></small> </section>
                </form>
              </main>
            </div>   
           
            </body>
          </html>
    </div>

@endsection