@extends('layouts.back')
@section('title')
Registry
@endsection
@section('header')
Registry
@endsection
@section('content')
  @include('inc.messages')
  
  <div class="row">
    <div class="col">
      <p>As many of you know, we have been living together for quite a while and already have a home full of everything we need. What we don't have is a honeymoon plan! Rather, we have too many plans and have yet to settle on one. We would love to have your input! Below is a list of some of our thoughts... plus some room for you to give us your ideas!</p>
      <p>We greatly anticipate your input on where we should go for our honeymoon!</p>
    </div>
  </div>
  {!!Form::open(['action' => 'PagesController@locations', 'method' => 'post'])!!}
    <div class="form-row justify-content-center">
      @foreach($locations as $location)
        <div class="form-group form-check form-check-inline col-4 col-md-3 col-lg-2">
          @if($location != "Other")
            {{Form::checkbox('location[]', $location, false, ['class' => 'form-check-input', 'id' => $location])}}
            {{Form::label($location, $location, ['class' => 'form-check-label'])}}
          @else
            {{Form::checkbox('location[]', $location, false, ['class' => 'form-check-input', 'id' => $location, 'onclick' => "if(this.checked){ document.getElementById('other-input').focus();}"])}}
            {{Form::text('other', '', ['class' => 'form-control form-control-sm','id' => 'other-input', 'placeholder' => 'Other', 'onfocus' => "$('#Other').prop('checked', true)"])}}
          @endif
        </div>
      @endforeach
    </div>
    <div class="form-row justify-content-center">
      <div class="col-md-6 col-12 mb-3 text-center">
        {{Form::text('name', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Full Name (required)'])}}
      </div>
    </div>
    <div class="form-row justify-content-center">
      <div class="col text-center">
        {{Form::submit('Submit Vote!', ['class' => 'btn btn-lg btn-primary'])}}
      </div>
    </div>
  {!!Form::close()!!}
  <hr>
  <div class="row">
    <div class="col">
      <p>While the greatest gift of all will be your presence on September 8th, for those who wish to generously help us live out our travel dreams, we have included a Honeymoon registry. And for anyone who hates travel, we have also included an Amazon registry.</p>
    </div>
  </div>
  {!!Form::open(['action' => 'PagesController@gifts', 'method' => 'post'])!!}
    <div class="form-row justify-content-center">
      <div class="col-md-6 col-12 mb-3 text-center">
        {{Form::text('name', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Full Name (required)'])}}
      </div>
    </div>
    <div class="form-row">
      @foreach($registry as $item)
        <div class="col-lg-4 col-md-6 col-12 mb-3">
          <div class="card h-100" style="min-height: 230px;">
            <div class="card-body">
              <h5 class="card-title">{{$item['title']}}</h5>
              <p class="card-text">{{$item['description']}}</p>
            </div>
            <div class="card-footer">
              <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text">$</div>
                </div>
                {{Form::number($item['id'], '', ['class' => 'form-control', 'placeholder' => 'Gift Amount'])}}
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="form-row justify-content-center">
      <div class="col-lg-4 col-md-6 col-12 mb-3 text-center">
        {{Form::submit('Continue >>', ['class' => 'btn btn-lg btn-primary'])}}
      </div>
    </div>
  {!!Form::close()!!}
@endsection