<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $table = ['finantial_budgets'];
    protected $fillable = [
      'category_id', 'goal_value', 'frecuency', 'purpose'
    ];
}
