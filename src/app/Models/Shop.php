<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;
use App\Models\Like;
use App\Models\Reservation;
use App\Models\User;

class Shop extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'area',
        'genre',
        'image',
        'introduction',
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class, 'shop_id');
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    // public function likedBy()
    // {
    //     return $this->belongsToMany(User::class, 'likes');
    // }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}