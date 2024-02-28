<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'city',
        'phone_number',
        'social_provider_id',
        'social_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function artisan()
    {
        return $this->hasOne(Artisan::class);
    }
    public function client(){
        return $this->hasMany(client::class);
    }

    public function customer(){
        return $this->hasOne(Customer::class);
    }
    public function admin(){
        return $this->hasOne(Admin::class);
    }

    public function is_admin(){
        return $this->admin()->exists();
    }
    public function is_artisan(){
        return $this->artisan()->exists();
    }

    public function is_customer()
    {
      return $this->customer()->exists();
    }

}
