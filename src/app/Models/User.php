<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Like;
use App\Models\Reservation;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(Shop::class, 'likes');
    }
}