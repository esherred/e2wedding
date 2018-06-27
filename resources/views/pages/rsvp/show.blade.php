@extends('layouts.back')
@section('title', 'RSVP |')
@section('header', 'RSVP')
@section('content')
  @include('inc.messages')
  <div class="row justify-content-center">
    <div class="col-lg-6 mb-3">
      <div class="row">
        <div class="col">
          {{ Form::open(['action' => 'RSVPController@save', 'method' => 'post']) }}
            {{ Form::hidden('id', $id) }}
            <div class="row">
              @foreach($guests as $guest)
                <div class="col-12 mb-3">
                  <div class="card">
                    <div class="card-body">
                      <span class="switch switch-sm float-right">
                        {{ Form::hidden('guest[]', $guest['id']) }}
                        {{ Form::checkbox("rsvp[{$guest['id']}]", true, $guest['attending'], ['id' => $guest['id']] ) }}
                        {{ Form::label($guest['id'], 'Attending?', ['class' => 'd-block']) }}
                      </span>
                      <h5 class="card-title">{{ $guest['fname'] }} {{ $guest['lname'] }}</h5>
                      <div class="form-group">
                        {{ Form::label("allergy[{$guest['id']}]", 'Allergy') }}
                        {{ Form::text("allergy[{$guest['id']}]", $guest['allergy'], ['class' => 'form-control']) }}
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
              <div class="col-12 text-center">
                {{Form::submit('Update RSVP', ['class' => 'btn btn-lg btn-primary mb-2'])}}
              </div>
            </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
@endsection