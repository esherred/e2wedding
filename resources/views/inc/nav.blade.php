<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-top sticky-top mb-3">
  <a class="navbar-brand d-inline-block d-md-none" href="/"><img src="{{ asset('img/logo.png') }}" class="img-fluid" style="max-width:50px;" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto text-center">
      @include('inc.navitems')
    </ul>
  </div>
</nav>