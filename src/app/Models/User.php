<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function shop()
        {
            return $this->belongsTo(Shop::class);
        }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function likedby()
    {
        return $this->belongsToMany(User::class, 'likes', 'shop_id', 'user_id');
    }
}