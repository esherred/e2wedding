@extends('layouts.back')
@section('title', 'RSVP |')
@section('header', 'RSVP')
@section('content')
  <div class="row justify-content-center">
    <div class="col-lg-10 mb-3">
      <table class="table table-sm table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Allergy</th>
            <th scope="col">Has RSVPd</th>
            <th scope="col">Attending</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ \E2Wedding\RSVP::where('has_rsvp', 1)->count() }} / {{ \E2Wedding\RSVP::count() }}</td>
            <td>{{ \E2Wedding\RSVP::where('attending', 1)->count() }} / {{ \E2Wedding\RSVP::count() }}</td>
          </tr>
          @foreach($guests as $count => $guest)
            <tr>
              <th scope="row">{{ $count + 1 }}</th>
              <td>{{$guest->fname}} {{$guest->lname}}</td>
              <td>{{$guest->allergy}}</td>
              <td>
                @if($guest->has_rsvp == 0)
                  <i style="color: red;" class="fa fa-times-circle-o" aria-hidden="true"></i>
                @else
                  <i style="color: green" class="fa fa-check-circle-o" aria-hidden="true"></i>
                @endif
              </td>
              <td>
                @if($guest->attending == 0)
                  <i style="color: red;" class="fa fa-times-circle-o" aria-hidden="true"></i>
                @else
                  <i style="color: green" class="fa fa-check-circle-o" aria-hidden="true"></i>
                @endif
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection