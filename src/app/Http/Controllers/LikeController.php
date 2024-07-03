<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Like;

class LikeController extends Controller
{
    public function like(Request $request, Shop $shop)
    {
        $shop->likes()->create([
            'user_id' => auth()->id(),
        ]);

        return response()->json(['status' => 'liked']);
    }

    public function unlike(Request $request, Shop $shop)
    {
        $shop->likes()->where('user_id', auth()->id())->delete();

        return response()->json(['status' => 'unliked']);
    }
}