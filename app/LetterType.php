<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    protected $table = ['letter_types'];
    protected $fillable = [
      'name'
    ];
}
