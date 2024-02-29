<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ServiceOfProfession extends Model

{
    use HasFactory;

   protected $table = 'services_of_profession';

    protected $filable = [
        '',
    ];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }




}
