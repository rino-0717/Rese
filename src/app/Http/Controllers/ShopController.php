<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shops = Shop::all(); // データベースから全てのショップを取得

        $areas = $shops->pluck('area')->unique();
        $genres = $shops->pluck('genre')->unique();
        $shops = Shop::with('like_users')->get();
        return view('shop', [
            'shops' => $shops,
            'areas' => $areas,
            'genres' => $genres,
        ]);
    }

    public function detail($shop_id)
    {
        $shop = Shop::findOrFail($shop_id);
        return view('detail', ['shop_id' => $shop_id]);
    }
}