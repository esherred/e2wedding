<?php

namespace E2Wedding;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
  protected $fillable = [
    'email',
    'fname',
    'lname',
    'address1',
    'address2',
    'city',
    'state',
    'zip',
    'need_guest'
  ];
}
