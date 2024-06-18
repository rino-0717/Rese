<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = ['name', 'area', 'genre', 'image_url'];

    public function like_users()
    {
        return $this->belongsToMany(User::class, 'likes');
    }
}