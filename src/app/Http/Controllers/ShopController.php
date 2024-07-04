<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;

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