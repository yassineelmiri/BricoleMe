<?php

namespace App\Models;

use App\Models\Artisan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RequestModel extends Model
{
    use HasFactory;


    public function artisan(){
        return $this->BelongsTo(Artisan::class);
    }
}
