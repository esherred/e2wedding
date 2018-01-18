@extends('layouts.home')
@section('title', 'Home')
@section('header')
Save The Date<br>
<small>Saturday, September 8, 2018</small>
@endsection
@section('content')
  <div class="row">
    <div class="col-4">
      <h2>Location Info:</h2>
      <strong>Date:</strong> Saturday, September 8, 2018<br>
      <strong>Location:</strong> Louisville, Ky
      <div class="google-maps rounded">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12532.444784663068!2d-85.76324676864475!3d38.25372702320356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886972bb0fde1297%3A0xfa0067294ea29000!2sDowntown%2C+Louisville%2C+KY!5e0!3m2!1sen!2sus!4v1516151319066" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-8">
      <form action="/" method="post" id="needs-validation" novalidate>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="fname">First name</label>
            <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" value="{{ old('fname') }}" required>
          </div>
          <div class="col-md-6 mb-3">
            <label for="lname">Last name</label>
            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" value="{{ old('lname') }}" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="address1">Address Line 1</label>
            <input type="text" class="form-control" id="address1" name="address1" placeholder="Address Line 1" value="{{ old('address1') }}" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <label for="address2">Address Line 2</label>
            <input type="text" class="form-control" id="address2" name="address2" placeholder="Address Line 2" value="{{ old('address2') }}">
          </div>
        </div>
        <div class="form-row">
          <div class="col-md-6 mb-3">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="City" value="{{ old('city') }}" required>
          </div>
          <div class="col-md-4 mb-3">
            <label for="state">Last name</label>
            <select name="state" id="state" class="form-control" required>
              <option selected>State</option>
              <option value="AL">Alabama</option>
              <option value="AK">Alaska</option>
              <option value="AZ">Arizona</option>
              <option value="AR">Arkansas</option>
              <option value="CA">California</option>
              <option value="CO">Colorado</option>
              <option value="CT">Connecticut</option>
              <option value="DE">Delaware</option>
              <option value="DC">District Of Columbia</option>
              <option value="FL">Florida</option>
              <option value="GA">Georgia</option>
              <option value="HI">Hawaii</option>
              <option value="ID">Idaho</option>
              <option value="IL">Illinois</option>
              <option value="IN">Indiana</option>
              <option value="IA">Iowa</option>
              <option value="KS">Kansas</option>
              <option value="KY">Kentucky</option>
              <option value="LA">Louisiana</option>
              <option value="ME">Maine</option>
              <option value="MD">Maryland</option>
              <option value="MA">Massachusetts</option>
              <option value="MI">Michigan</option>
              <option value="MN">Minnesota</option>
              <option value="MS">Mississippi</option>
              <option value="MO">Missouri</option>
              <option value="MT">Montana</option>
              <option value="NE">Nebraska</option>
              <option value="NV">Nevada</option>
              <option value="NH">New Hampshire</option>
              <option value="NJ">New Jersey</option>
              <option value="NM">New Mexico</option>
              <option value="NY">New York</option>
              <option value="NC">North Carolina</option>
              <option value="ND">North Dakota</option>
              <option value="OH">Ohio</option>
              <option value="OK">Oklahoma</option>
              <option value="OR">Oregon</option>
              <option value="PA">Pennsylvania</option>
              <option value="RI">Rhode Island</option>
              <option value="SC">South Carolina</option>
              <option value="SD">South Dakota</option>
              <option value="TN">Tennessee</option>
              <option value="TX">Texas</option>
              <option value="UT">Utah</option>
              <option value="VT">Vermont</option>
              <option value="VA">Virginia</option>
              <option value="WA">Washington</option>
              <option value="WV">West Virginia</option>
              <option value="WI">Wisconsin</option>
              <option value="WY">Wyoming</option>
            </select>
          </div>
          <div class="col-md-2 mb-3">
            <label for="zip">Zip Code</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip Code" value="{{ old('zip') }}" required>
          </div>
        </div>
        <div class="form-row">
          <div class="col-12 mb-3">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
@endsection