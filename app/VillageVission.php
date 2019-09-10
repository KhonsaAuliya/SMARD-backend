<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class VillageVission extends Model
{
    protected $table = ['village_vissions'];
    protected $fillable = [
      'content','desc'
    ];
}
