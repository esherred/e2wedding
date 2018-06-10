@if ($errors->any())
  @foreach ($errors->all() as $error)
    <div class="alert alert-danger">
      {{ $error }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
    </div>
  @endforeach
@endif

@if (session('success'))
  <div class="alert alert-success">
    {{session('success')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session('error'))
  <div class="alert alert-danger">
    {{session('error')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(app('request')->input('no-amt') != null)
  <div class="alert alert-danger">
    Gift Amount Needed To Continue
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(app('request')->input('no-name') != null)
  <div class="alert alert-danger">
    Please Enter Your Name To Continue
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(app('request')->input('no-loc') != null)
  <div class="alert alert-danger">
    Please Select A Location
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if(app('request')->input('success') != null)
  <div class="alert alert-success">
    Your vote has been saved! Thank you!
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif