<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('partials.style')
    {{-- <title>halaman {{$title}}</title> --}}
  </head>
  <body>
    @include ('partials.navbar')
    <div class="container2" mt-4>
        @yield('container2')
    </div>

    
    @include ('partials.footer')
    
    @include('partials.js')

    <script src="{{asset('dist/js/bootstrap.bundle.min.js')}}"></script>


  </body>
</html>