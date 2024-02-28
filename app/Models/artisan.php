<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id'
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }

    public function professions()
    {
        return $this->belongsToMany(Profession::class,'professions_of_artisan');
    }
    public function request(){
        return $this->hasMany(RequestModel::class,'requests');
    }

}
