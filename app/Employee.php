<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
      'firstName',
      'lastName',
      'department',
      'title',
      'email',
      'workPhone',
      'personalPhone',
      'picture',
      'location',
      'dateStarted' ];
}
