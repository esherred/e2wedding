<?php

namespace E2Wedding;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
  protected $fillable = [
    'title',
    'url',
    'description'
  ];
}
