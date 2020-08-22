<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
  use SoftDeletes;



    protected $fillable = [
      'text',
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function favorites()
    {
      return $this->hasMany(Favorite::class);
    }

    public function comments()
    {
      return $this->hasMany(Comment::class);
    }
}
