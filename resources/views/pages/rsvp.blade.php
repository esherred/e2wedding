@extends('layouts.back')
@section('title', 'RSVP |')
@section('header', 'RSVP')
@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-10 mb-3">
      Search for your name, First and Last, to complete your RSVP.
    </div>
    <div class="col-lg-10">
      {{ Form::open(['action' => 'RSVPController@search', 'method' => 'post', 'class' => 'form-inline justify-content-center']) }}

        <label class="sr-only" for="fname">First Name</label>
        {{Form::text('fname', '', ['class' => 'form-control form-control-lg mb-2 mr-sm-2', 'placeholder' => 'First Name'])}}

        <label class="sr-only" for="lname">Last Name</label>
        {{Form::text('lname', '', ['class' => 'form-control form-control-lg mb-2 mr-sm-2', 'placeholder' => 'Last Name'])}}
        
        {{Form::submit('Search', ['class' => 'btn btn-lg btn-primary mb-2'])}}

      {{ Form::close() }}

    </div>
  </div>
  <div class="row h-100 my-5">&nbsp;</div>
  <div class="row h-100 my-5">&nbsp;</div>
@endsection