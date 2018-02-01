<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | {{config('app.name')}} </title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    @include('inc.nav')

    @yield('body')

    <footer class="mt-3">
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-idea-white.png') }}" class="img-fluid" style="max-width:75px;" alt=""></a>
        <ul class="nav">
          @include('inc.navitems')
        </ul>
      </nav>
    </footer>

    <script src="{{ asset('js/min/app-min.js') }}"></script>
</body>
</html>
