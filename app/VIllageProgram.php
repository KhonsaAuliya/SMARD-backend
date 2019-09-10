<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VIllageProgram extends Model
{
    protected $table = ['village_programs'];
    protected $fillable  = [
      'title','desc'
    ];

    protected $dates = [
      'date_start' => 'date',
      'date_finish' => 'date',
    ];
}
