<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Reservation extends Model
{
    use HasFactory;

    public function ServiceOfARtisan():BelongsToMany
    {
        return $this->belongsToMany(ServiceOfArtisan::class)->using(ReservationOfService::class);
    }

    public function client(){
        return $this->belongsToOne(client::class);
    }

    public function Claim(){
        return $this->hasOne(Claims::class);
    }
    protected $fillable = [
        'timing',
        'description',
        'status',
        'client_id',

    ];
}
