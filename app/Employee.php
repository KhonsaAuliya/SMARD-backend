<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


class Employee extends Model
{
    protected $table = ['employees'];
    protected $fillable = [
      'user_id','identity_number','position'
    ];

    protected $dates = [
      'tenure_start' => 'date',
      'tenure_finish' => 'date',
    ];

}
