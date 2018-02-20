@extends('layouts.back')
@section('title')
Guest List |
@endsection
@section('header')
Guest List
@endsection
@section('content')
  <div class="row justify-content-center">
    <div class="col-md-10 col">
      @if (isset($guests) && $guests->count() > 0)
      <table class="table">
        <thead>
          <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Allergy</th>
          </tr>
        </thead>
        <tbody>
           @foreach($guests as $guest)
          <tr>
            <td><a href="mailto:{{$guest->email}}">{{$guest->fname}} {{$guest->lname}}</a></td>
            <td>
              {{$guest->address1}}<br>
              @if($guest->address2 != '')
                {{$guest->address2}}<br>
              @endif
              {{$guest->city}}, {{$guest->state}} {{$guest->zip}}
            </td>
            <td>
              {{$guest->allergy}}
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @else
      No Guests Yet
      @endif
    </div>
  </div>
@endsection