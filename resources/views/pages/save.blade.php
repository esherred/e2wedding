@extends('layouts.back')
@section('title')
Save The Date |
@endsection
@section('header')
Save <span class="borderline">H</span> Date<br>
<small>Saturday, September 8, 2018</small>
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-4">
      <h2>Location Info:</h2>
      <strong>Date:</strong> Saturday, September 8, 2018<br>
      <strong>Location:</strong> Louisville, Kentucky
      <div class="google-maps rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12532.444784663068!2d-85.76324676864475!3d38.25372702320356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886972bb0fde1297%3A0xfa0067294ea29000!2sDowntown%2C+Louisville%2C+KY!5e0!3m2!1sen!2sus!4v1516151319066" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-lg-8">
      @include('inc.guestForm')
    </div>
  </div>
@endsection