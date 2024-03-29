<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    protected $table = ['post_categories'];
    protected $fillable = [
      'parent_id', 'name'
    ];
}
