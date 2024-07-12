<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Favorite;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        $reservations = $user->reservations()->with('shop')->get();
        $likes = $user->likes()->with('shop')->get(); // likes 変数を定義

        return view('mypage', compact('reservations', 'likes'));
    }
}