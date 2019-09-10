<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    protected $table = ['finantial_wallets'];
    protected $fillable = [
      'name', 'value','desc'
    ];
}
