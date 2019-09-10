<?php

namespace App;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = ['posts'];
    protected $fillable = [
      'title', 'subtitle', 'category_id', 'desc', 'content','status','uri'
    ];

    protected $hidden = [
      'remember_token'
    ];
}
