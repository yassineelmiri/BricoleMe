<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory;

    public function serviceOfArtisan(): BelongsToMany
    {
        return $this->belongsToMany(ServiceOfArtisan::class)
            ->using(ReservationOfService::class)
            ->withPivot('id') 
            ->onDelete('cascade');
    }

    public function client(){
        return $this->belongsTo(client::class);
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
