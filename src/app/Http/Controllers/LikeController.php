<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Shop;

class LikeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reservations = $user->reservations()->with('shop')->get();
        $likedby = $user->likedby ()->with('shop')->get();
        $likes = $user->likes()->with('shop')->get(); // likes 変数を定義

        return view('mypage', compact('reservations', 'favorites', 'likes'));
    }
}