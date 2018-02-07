@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{ $error }}
    </div>
  @endforeach
@endif

@if (session('success'))
  <div class="alert alert-success">
    {{session('success')}}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
  </div>
@endif

@if(app('request')->input('no-amt') != null)
  <div class="alert alert-danger">
    Gift Amount Needed To Continue
  </div>
@endif

@if(app('request')->input('no-loc') != null)
  <div class="alert alert-danger">
    Please Select A Location
  </div>
@endif

@if(app('request')->input('success') != null)
  <div class="alert alert-success">
    Your vote has been saved! Thank you!
  </div>
@endif