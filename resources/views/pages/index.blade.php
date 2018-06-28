@extends('layouts.home')
@section('title')

@endsection
@section('header')
<span class="borderline bigger">H</span> <span class="bigger">Wedding</span> <span class="borderline bigger">C</span> <br>Erica Rodgers <span class="borderline d-lg-inline d-block">F</span> Eric Sherred<br>
<small>Saturday, September 8, 2018</small>
@endsection
@section('content')
  <div class="row">
    <div class="col-lg-8">
      <h3>Event Info:</h3>
      <strong>Date:</strong> Saturday, September 8, 2018<br>
      <strong>Location:</strong> Louisville Palace Theater<br>
      <strong>Time:</strong> 4:30 PM<br>
      <strong>Hotel Block:</strong> <a href="/hotel">Sealbach Hotel</a>
      <div class="google-maps rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.3551884525623!2d-85.7600377493565!3d38.24806749246108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886972ae3452e41f%3A0xc9fcf1b0696f8034!2sLouisville+Palace+Theatre!5e0!3m2!1sen!2sus!4v1530070496245" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-lg-4">
      <h3 class="text-center"><a href="/rsvp">RSVP Now</a></h3>
      <a href="/invitation"><img src="/img/invitation.jpg" alt="Invitation" class="img-fluid img-thumbnail"></a>
    </div>
  </div>
@endsection