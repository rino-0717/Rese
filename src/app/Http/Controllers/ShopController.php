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
        $shops = Shop::with('favorite_shops')->get();
        return view('shop', [
            'shops' => $shops,
            'areas' => $areas,
            'genres' => $genres,
        ]);
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

    public function like(Request $request)
    {
        $shop = Shop::find($request->shop_id);
        $shop->favorite_shops()->attach(auth()->user()->id);

        return response()->json(['success' => true]);
    }

    public function unlike(Request $request)
    {
        $shop = Shop::find($request->shop_id);
        $shop->favorite_shops()->detach(auth()->user()->id);

        return response()->json(['success' => true]);
    }
}