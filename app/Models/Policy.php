<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
  protected $table = 'policy';
  protected $fillable = [
    'details'
  ];
}
