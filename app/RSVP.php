<?php

namespace E2Wedding;

use Illuminate\Database\Eloquent\Model;

class RSVP extends Model
{
  protected $table = 'rsvps';
  protected $fillable = [
    'fname',
    'lname',
    'guest_id',
    'allergy',
    'has_rsvp',
    'attending'
  ];
}
