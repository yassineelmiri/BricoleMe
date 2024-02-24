<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfessionsOfArtisan extends Model
{
    use HasFactory;

    protected $table = 'professions_of_artisan';
    protected $fillable = [
        'artisan_id',
        'profession_id'
    ];
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }

    public function artisan()
    {
        return $this->belongsTo(Artisan::class);
    }
}
