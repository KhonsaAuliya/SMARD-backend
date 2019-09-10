<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterSummary extends Model
{
    protected $table = ['letter_summaries'];
    protected $fillable = [
      'letter_id', 'fulfillment'
    ];
}
