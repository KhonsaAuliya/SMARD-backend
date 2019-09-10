<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterDetail extends Model
{
    protected $table = ['letter_details'];
    protected $fillable = [
      'type_id', 'purpose', 'message'
    ];

}
