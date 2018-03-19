@extends('layouts.back')
@section('title', 'Engagement Party |')
@section('header', 'Engagement Party')
@section('content')
  <div class="row  mb-3">
    <div class="col col-sm-6">
      <div class="info"><strong>Where:</strong> InfoData!</div>
      <div class="info"><strong>When:</strong> InfoData!</div>
      <div class="info"><strong>Why:</strong> InfoData!</div>
      <div class="rsvp mt-3">
        @include('inc.messages')

        {{ Form::open(['action' => 'GuestsController@store', 'method' => 'post']) }}
          <div class="form-row">
            <div class="form-group col-md-6">
              {{Form::text('fname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'First Name'])}}
            </div>
            <div class="form-group col-md-6">
              {{Form::text('lname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Last Name'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              {{Form::email('email', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Email'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              {{Form::text('guest-fname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Guest First Name'])}}
            </div>
            <div class="form-group col-md-6">
              {{Form::text('guest-lname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Guest Last Name'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              {{Form::email('guest-email', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Guest Email'])}}
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col">
              Do You Plan on Attending?
              {{ Form::radio('attending', 'yes', false, ['class' => 'ml-3']) }} Yes
              {{ Form::radio('attending', 'no', false, ['class' => 'ml-3']) }} No
            </div>
          </div>
          {{Form::hidden('page', $_SERVER['REQUEST_URI'])}}
          <div class="form-row justify-content-center">
            {{Form::submit('Send Info!', ['class' => 'btn btn-lg btn-primary w-100'])}}
          </div>
        {{ Form::close() }}
      </div>
    </div>
    <div class="col col-sm-6">
      <img class="img-fluid w-100" src="http://placekitten.com/450/650" alt="" />
    </div>
  </div>
@endsection