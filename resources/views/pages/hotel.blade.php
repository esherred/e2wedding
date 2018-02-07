@extends('layouts.back')
@section('title', 'Hotel Block |')
@section('header', 'Hotel Block')
@section('content')
  <div class="row">
    <div class="col-12 mb-3">
      <img src="/img/jumbotron-seelbach-entrance.jpg" alt="Seelbach Hotel" class="img-fluid rounded">
    </div>
    <div class="col-md-6 col-12 mb-3">
      <div class="google-maps rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3133.2306774651697!2d-85.75994454889626!3d38.250955679575846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886972a5618717d7%3A0x71eb9d6ddc46aef8!2sThe+Seelbach+Hilton+Louisville!5e0!3m2!1sen!2sus!4v1516211844080" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6 col-12 mb-3">
      <h2>Seelbach Hotel</h2>

      <p>500 S 4th St<br>
      Louisville, KY 40202</p>

      <p>We were lucky enough to be able to get a great deal on this amazing historic landmark hotel. This hotel helped inspire F. Scott Fitzgerald's "The Great Gatsby" and we'd love for you to stay there with us! The breathtaking lobby should help set the scene!</p>

      <p>
        <a target="_blank" href="https://secure.hilton.com/en/hi/res/choose_dates.jhtml?groupCode=RSW&hotel=SDFSHHF&arrivalDay=07&arrivalMonth=09&arrivalYear=2018&departureDay=09&departureMonth=09&departureYear=2018&WT.mc_id=1HI2OLL3SeelbachHiltonLouisville4Local5BookNow6SDFSHHF7EN">Block Reservations</a>
        <br>
        <small>September 7th - 8th, 2018</small>
      </p>
    </div>
  </div>
@endsection