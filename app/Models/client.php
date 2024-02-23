<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class client extends Model
{
    use HasFactory, SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        '',
        ''

    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function Reservation(){
        return $this->hasMany(Reservation::class);
    }
}
