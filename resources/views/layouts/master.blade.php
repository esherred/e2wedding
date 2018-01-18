<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') | E2 Wedding</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-top">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto text-center">
          @foreach ($links as $link)
            <li class="nav-item">
              <a class="nav-link" href="{{$link->url}}">{{$link->title}}</a>
            </li>
          @endforeach
        </ul>
      </div>
    </nav>

    @yield('body')

    <footer class="mt-3">
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="/"><img src="{{ asset('img/logo-idea-white.png') }}" class="img-fluid" style="max-width:75px;" alt=""></a>
        <ul class="nav">
          @foreach ($links as $link)
            <li class="nav-item">
              <a class="nav-link" href="{{$link->url}}">{{$link->title}}</a>
            </li>
          @endforeach
        </ul>
      </nav>
    </footer>

    <!-- Scripts -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="{{ asset('js/min/app-min.js') }}"></script>
</body>
</html>
