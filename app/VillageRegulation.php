<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VillageRegulation extends Model
{
    protected $table = ['village_regulations'];

    protected $fillable = [
      'title', 'desc'
    ];
}
