<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // 飲食店一覧ページ表示のロジックをここに記述
        return view('shop.index');
    }

    public function detail($shop_id)
    {
        // 飲食店詳細ページ表示のロジックをここに記述
        return view('shop.detail', ['shop_id' => $shop_id]);
    }
}