@extends('layouts.master')
@section('body')

    <header>
      <div class="jumbotron jumbotron-fluid text-center mb-0">
        <div class="container">
          <div class="row">
            <div class="col-2 col-md-1"><img src="{{ asset('img/corner-white.png') }}" class="img-fluid" alt=""></div>
            <div class="col b-top"></div>
            <div class="col w-100px"><img src="{{ asset('img/logo-white.png') }}" class="img-fluid mt-50" alt=""></div>
            <div class="col b-top"></div>
            <div class="col-2 col-md-1"><img src="{{ asset('img/corner-white.png') }}" class="flip-x img-fluid" alt=""></div>
          </div>
          <div class="row">
            <div class="col mx-15 my-2 b-left b-right"><h1 class="display-4">@yield('header')</h1></div>
          </div>
          <div class="row">
            <div class="col-2 col-md-1"><img src="{{ asset('img/corner-white.png') }}" class="flip-y img-fluid" alt=""></div>
            <div class="col b-bottom"></div>
            <div class="col-2 col-md-1"><img src="{{ asset('img/corner-white.png') }}" class="flip-xy img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </header>

    @include('inc.nav')
    
    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>

@endsection