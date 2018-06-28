@extends('layouts.back')
@section('title', 'RSVP |')
@section('header', 'RSVP')
@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-10 mb-3">
      <div class="row">
        @if(count($guests) < 1)
          <div class="col">
            <h2>No results found, <a href="/rsvp">try again</a>!</h2>
          </div>
        @else
          @foreach($guests as $guest)
            <div class="col-md-6 col-12 mb-3">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">{{ $guest->fname }} {{ $guest->lname }}</h5>
                  <p class="card-text">Has {{ $guest->has_rsvp ? '' : 'Not' }} RSVPd </p>
                </div>
                <div class="card-footer text-right">
                  <a href="/rsvp/{{ $guest->id }}" class="btn btn-sm btn-primary">This is Me!</a>
                </div>
              </div>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection