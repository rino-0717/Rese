<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Shop;

class LikeController extends Controller
{
    public function like(Request $request, $id)
    {
        if (!Auth::check()) {
            return response()->json(['success' => false, 'redirect' => route('login.create')]);
        }

        $shop = Shop::findOrFail($id);
        $user = Auth::user();

        if ($user->likes()->where('shop_id', $id)->exists()) {
            $user->likes()->detach($id);
            $liked = false;
        } else {
            $user->likes()->attach($id);
            $liked = true;
        }

        return response()->json(['success' => true, 'liked' => $liked]);
    }
}