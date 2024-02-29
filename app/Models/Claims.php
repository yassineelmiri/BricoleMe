<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claims extends Model
{
    use HasFactory;

public function reservation()
    {
      return $this->belongsTo(Reservation::class);
    }
}
