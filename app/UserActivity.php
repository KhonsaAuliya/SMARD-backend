<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserActivity extends Model
{
    protected $table = ['user_activity_statuses'];
    protected $fillable = [
      'user_id','status'
    ];

    protected $dates = [
      'last_active' => 'datetime',
    ];
}
