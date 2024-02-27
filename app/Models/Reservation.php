<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reservation extends Model
{
    use HasFactory;

    public function Services():BelongsToMany
    {
        return $this->belongsToMany(Service::class)->using(ReservationOfService::class);
    }

    public function client(){
        return $this->belongsToOne(client::class);
    }

    protected $fillable = [
        'client_id',

    ];
}
