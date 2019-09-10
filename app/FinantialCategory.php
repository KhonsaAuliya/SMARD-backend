<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinantialCategory extends Model
{
    protected $table = ['finantial_categories'];
    protected $fillable = [
      'name', 'parent_id'
    ];
}
