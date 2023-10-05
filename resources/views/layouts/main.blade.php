<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    @include('partials.style')
    {{-- <title>halaman {{$title}}</title> --}}
  </head>
  <body style="background-color: rgb(250, 250, 250); w-full">

    @include ('partials.navbar')
    <div class="container" mt-4>
        @yield('container')
    </div>

    
    @include ('partials.footer')
    
    @include('partials.js')

    {{-- <script src="{{assets('assets/dist/js/bootstrap.bundle.min.js')}}"></script> --}}
    <script src="('assets/dist/js/bootstrap.bundle.min.js')"></script>

    <link rel="stylesheet" type="text/css" href="{!! asset('../public/css/style1.css') !!}">
  </body>
</html>