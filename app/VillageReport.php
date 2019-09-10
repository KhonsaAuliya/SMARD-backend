<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillageReport extends Model
{
    protected $table = ['village_report'];
    protected $fillable = [
      'user_id', 'name', 'email', 'address', 'phone', 'content', 'attachment'
    ];

    protected $hidden = ['remember_token'];
}
