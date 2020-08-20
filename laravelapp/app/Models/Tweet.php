<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
  use SoftDeletes;



    protected $fillable = [
      'text',
    ];
}
