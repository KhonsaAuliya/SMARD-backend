<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinantialExpence extends Model
{
    protected $table = ['finantial_expences'];
    protected $fillable = [
      'wallet_id', 'value', 'category_id', 'purpose', 'receiver', 'attachment'
    ];

    protected $dates = [
      'datetime_trx' => 'datetime'
    ];
}
