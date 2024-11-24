<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Student extends Model
{
  use HasFactory;

  public function scopeStatus($query, $status)
  {
    return $query->where('status', $status);
  }

  public function posts(): HasMany
  {
    return $this->hasMany(Post::class);
  }
}