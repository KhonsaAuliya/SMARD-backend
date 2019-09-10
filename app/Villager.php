<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    protected $table = ['villagers'];
    protected $fillable = [
      'user_id',
      'identity_number',
      'mother_name',
      'relationship_status',
      'average_income'
    ];

    protected $hidden = [
      'token'
    ];
}
