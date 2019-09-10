<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LetterIdentity extends Model
{
    protected $tables = ['letter_identities'];
    protected $fillable = [
      'user_id','letter_id','identity_number', 'name', 'gender', 'birthplace', 'birthday', 'job', 'relationship_status', 'religion', 'address'
    ];

    protected $hidden = ['remember_token'];
}
