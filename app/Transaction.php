<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    // This attribute allow people to insert a new transaction with remarks attribute
    // When enabled, $user->transactions()->create(['remarks' => 'I can be added']) is allowed
    // protected $fillable = ['remarks'];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
