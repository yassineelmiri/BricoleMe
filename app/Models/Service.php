<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function Reservation():BelongsToMany
    {
        return $this->belongsToMany(Reservation::class)->using(ReservationOfService::class);
    }

    public function artisans()
    {
        return $this->belongsToMany(Artisan::class,'services_of_artisans');
    }

    public function professions()
    {
        return $this->belongsToMany(Profession::class,'services_of_profession');
    }
}
