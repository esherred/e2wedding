@extends('layouts.master')
@section('title', 'Home')
@section('body')

    <header>
      <div class="jumbotron jumbotron-fluid text-center">
        <div class="container">
          <div class="row">
            <div class="col-2"><img src="{{ asset('img/corner-white.png') }}" class="img-fluid" alt=""></div>
            <div class="col b-top"></div>
            <div class="col w-150"><img src="{{ asset('img/logo.png') }}" class="img-fluid mt-50" alt=""></div>
            <div class="col b-top"></div>
            <div class="col-2"><img src="{{ asset('img/corner-white.png') }}" class="flip-x img-fluid" alt=""></div>
          </div>
          <div class="row">
            <div class="col mx-15 my-2 b-left b-right"><h1 class="display-4">@yield('header')</h1></div>
          </div>
          <div class="row">
            <div class="col-2"><img src="{{ asset('img/corner-white.png') }}" class="flip-y img-fluid" alt=""></div>
            <div class="col-8 b-bottom"></div>
            <div class="col-2"><img src="{{ asset('img/corner-white.png') }}" class="flip-xy img-fluid" alt=""></div>
          </div>
        </div>
      </div>
    </header>

    <main>
      <div class="container">
        @yield('content')
      </div>
    </main>

@endsection