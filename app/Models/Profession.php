<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory,SoftDeletes;

    protected $date = ['created_at'];
    protected $fillable = [
        'name',
    ];

    public function artisans()
    {
        return $this->belongsToMany(Artisan::class,'professions_of_artisan');
    }

}
