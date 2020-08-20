<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  use SoftDeletes;

 /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
 protected $fillable = [
     'text'
}
