<!doctype html>
<html lang="en">
  <head>
    @if (App::environment('production'))
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-7400804-4"></script>
      <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-7400804-4');
      </script>
    @endif
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') The Wedding of Erica Rodgers and Eric Sherred </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>

    @yield('body')

    <footer class="mt-3">
      <nav class="navbar navbar-dark bg-dark justify-content-center">
        <a class="navbar-brand d-none d-lg-inline-block" href="/"><img src="{{ asset('img/logo-white.png') }}" class="img-fluid" style="max-width:75px;" alt=""></a>
        <ul class="nav">
          @include('inc.navitems')
        </ul>
      </nav>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
    <script src="{{ asset('js/min/app-min.js') }}"></script>
</body>
</html>
