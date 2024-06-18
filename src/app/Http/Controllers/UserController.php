<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        $favoriteShops = $user->favorite_shops; // Assuming you have a relationship defined

        return view('mypage', [
            'user' => $user,
            'favoriteShops' => $favoriteShops,
        ]);
    }
}