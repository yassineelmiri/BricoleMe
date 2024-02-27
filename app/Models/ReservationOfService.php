<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

<<<<<<<< HEAD:app/Models/Customer.php
class Customer extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $fillable = ['user_id'];

========
class ReservationOfService extends Pivot
{
    use HasFactory;

    protected $filable = [
        '',
    ];

    
>>>>>>>> a379308da12ef8e34f1d7a473a7315d2b1def3e8:app/Models/ReservationOfService.php
}
