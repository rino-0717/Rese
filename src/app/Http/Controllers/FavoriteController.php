<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use Illuminate\Support\Facades\Auth;


class FavoriteController extends Controller
{
    public function create(Request $request)
    {
        // お気に入り登録処理のロジックをここに記述
    }

    public function delete(Request $request)
    {
        // お気に入り解除処理のロジックをここに記述
    }

    public function like(Request $request)
    {
        $shop = Shop::findOrFail($request->shop_id);
        $shop->like_users()->attach(Auth::id());

        return response()->json(['success' => true]);
    }

    public function unlike(Request $request)
    {
        $shop = Shop::findOrFail($request->shop_id);
        $shop->like_users()->detach(Auth::id());

        return response()->json(['success' => true]);
    }
}