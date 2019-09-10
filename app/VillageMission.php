<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VillageMission extends Model
{
    protected $table = ['village_missions'];
    protected $fillable = [
      'content','desc'
    ];
}
