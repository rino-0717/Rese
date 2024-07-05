<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;

class LikeController extends Controller
{
    public function like($shopId)
    {
        $user = Auth::user();
        $user->likes()->create(['shop_id' => $shopId]);
        return redirect()->back();
    }

    public function unlike($shopId)
    {
        $user = Auth::user();
        $user->likes()->where('shop_id', $shopId)->delete();
        return redirect()->back();
    }
}