<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

</head>
<body>
  <h1>New RSVPs:</h1>
  @foreach($guests as $guest)
    <p>
      <strong>{{ \E2Wedding\RSVP::where('id', $guest)->first()->fname }} {{ \E2Wedding\RSVP::where('id', $guest)->first()->lname }}</strong>: 
      @if(\E2Wedding\RSVP::where('id', $guest)->first()->attending != 1)
        Not
      @endif
      Attending
      
      @if(\E2Wedding\RSVP::where('id', $guest)->first()->allergy != null || \E2Wedding\RSVP::where('id', $guest)->first()->allergy != '')
        <br>
        <strong>Allergy</strong>: {{ \E2Wedding\RSVP::where('id', $guest)->first()->allergy }}
      @endif
      
    </p>
  @endforeach
</body>
</html>
