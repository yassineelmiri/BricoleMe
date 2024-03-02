<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'rating',
        'comment',
    ];

    public function reservation(): BelongsTo
    {
        return $this->belongsTo(Reservation::class);
    }
}
