<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOfArtisan extends Model
{
    use HasFactory;

    protected $table = 'services_of_artisans';


    protected $fillable = [
        'price',
        'artisan_id',
        'service_id',
    ];

    public function Reservation():BelongsToMany
    {
        return $this->belongsToMany(Reservation::class)->using(ReservationOfService::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
