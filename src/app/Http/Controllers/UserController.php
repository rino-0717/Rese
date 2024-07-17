<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Like;

class UserController extends Controller
{
    public function mypage()
    {
        $user = Auth::user();
        $reservations = $user->reservations()->with('shop')->get();
        $likes = $user->likes()->with('shop')->get();
        $likedby = $user->likedby()->with('shop')->get();

        return view('mypage', compact('reservations', 'likes', 'likedby'));
    }
}