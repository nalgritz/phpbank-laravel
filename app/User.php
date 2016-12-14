<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
  public function transactions()
  {
    return $this->hasMany(Transaction::class);
  }

  public function path()
  {
    return '/users/'.$this->id;
  }

}
