<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationOfService extends Pivot
{
    use HasFactory;

    protected $filable = [
        '',
    ];

    
}
