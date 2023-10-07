<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  use HasFactory;

  protected $guarded = [];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function apply()
  {
    return $this->hasMany(Apply::class);
  }

  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
