<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('likedBy')->get();
        $areas = Shop::select('area')->distinct()->get(); // エリア情報を取得
        $genres = Shop::select('genre')->distinct()->get(); // ジャンル情報を取得
        return view('shop', compact('shops', 'areas', 'genres'));
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        $shops = Shop::all();
        $areas = $shops->pluck('area')->unique();
        $genres = $shops->pluck('genre')->unique();
        $introductions = $shop->introductions;
        return view('detail', [
            'shop' => $shop,
            'shops' => $shops,
            'areas' => $areas,
            'genres' => $genres,
            'introductions' => $introductions,
        ]);
    }

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