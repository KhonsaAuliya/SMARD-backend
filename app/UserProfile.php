<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = ['user_profiles']
    protected $fillable = [
      'user_id','birthday','birthplace','gender','religion','address','job','company','phone','desc','avatar'
    ];
}
