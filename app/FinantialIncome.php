<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FinantialIncome extends Model
{
    protected $table = ['finantial_incomes'];
    protected $fillable = [
      'wallet_id', 'value', 'category_id', 'purpose', 'source', 'attachment'
    ];

    protected $dates = [
      'datetime_trx' => 'datetime'
    ];
}
