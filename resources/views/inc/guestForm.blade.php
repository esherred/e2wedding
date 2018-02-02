<div class="row">
    <div class="col">
        <p>Welcome! Step right up and sign up to witness the spectacle that will be the wedding of Eric and Erica! If you would be so kind as to fill in the information below, we will be able to send you a formal invitation as the event approaches!</p>
    </div>
</div>

@include('inc.messages')

{{ Form::open(['action' => 'GuestsController@store', 'method' => 'post']) }}
  <div class="form-row">
    <div class="form-group col-md-4">
      {{Form::text('fname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'First Name'])}}
    </div>
    <div class="form-group col-md-4">
      {{Form::text('lname', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Last Name'])}}
    </div>
    <div class="form-group col-md-4">
      {{Form::email('email', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Email'])}}
    </div>
  </div>
  <div class="form-group">
    {{Form::text('address1', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Address Line 1'])}}
  </div>
  <div class="form-group">
    {{Form::text('address2', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Address Line 2 (optional)'])}}
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      {{Form::text('city', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'City'])}}
    </div>
    <div class="form-group col-md-4">
      {{Form::select('state',array(
        '' => 'State',
        'AL'=>'Alabama',
        'AK'=>'Alaska',
        'AZ'=>'Arizona',
        'AR'=>'Arkansas',
        'CA'=>'California',
        'CO'=>'Colorado',
        'CT'=>'Connecticut',
        'DE'=>'Delaware',
        'DC'=>'District of Columbia',
        'FL'=>'Florida',
        'GA'=>'Georgia',
        'HI'=>'Hawaii',
        'ID'=>'Idaho',
        'IL'=>'Illinois',
        'IN'=>'Indiana',
        'IA'=>'Iowa',
        'KS'=>'Kansas',
        'KY'=>'Kentucky',
        'LA'=>'Louisiana',
        'ME'=>'Maine',
        'MD'=>'Maryland',
        'MA'=>'Massachusetts',
        'MI'=>'Michigan',
        'MN'=>'Minnesota',
        'MS'=>'Mississippi',
        'MO'=>'Missouri',
        'MT'=>'Montana',
        'NE'=>'Nebraska',
        'NV'=>'Nevada',
        'NH'=>'New Hampshire',
        'NJ'=>'New Jersey',
        'NM'=>'New Mexico',
        'NY'=>'New York',
        'NC'=>'North Carolina',
        'ND'=>'North Dakota',
        'OH'=>'Ohio',
        'OK'=>'Oklahoma',
        'OR'=>'Oregon',
        'PA'=>'Pennsylvania',
        'RI'=>'Rhode Island',
        'SC'=>'South Carolina',
        'SD'=>'South Dakota',
        'TN'=>'Tennessee',
        'TX'=>'Texas',
        'UT'=>'Utah',
        'VT'=>'Vermont',
        'VA'=>'Virginia',
        'WA'=>'Washington',
        'WV'=>'West Virginia',
        'WI'=>'Wisconsin',
        'WY'=>'Wyoming',
        ) , 
        '',
        [
          'class' => 'form-control form-control-lg'
        ]
      )}}
    </div>
    <div class="form-group col-md-2">
      {{Form::text('zip', '', ['class' => 'form-control form-control-lg', 'placeholder' => 'Zip'])}}
    </div>
  </div>
  {{Form::hidden('page', $_SERVER['REQUEST_URI'])}}
  <div class="form-row justify-content-center">
    {{Form::submit('Send Info!', ['class' => 'btn btn-lg btn-primary'])}}
  </div>
{{ Form::close() }}