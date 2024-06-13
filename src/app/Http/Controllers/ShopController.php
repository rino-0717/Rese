<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        // 飲食店一覧ページ表示のロジックをここに記述
        $shops = [
            // ダミーデータ
            (object)[
                'id' => 1,
                'name' => '仙人',
                'area' => '東京都',
                'genre' => '寿司',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 2,
                'name' => '牛助',
                'area' => '大阪府',
                'genre' => '焼肉',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
                'is_favorite' => true, false,
            ],
            // 他も追加
        ];

        return view('shop', ['shops' => $shops]);
    }

    public function detail($shop_id)
    {
        // 飲食店詳細ページ表示のロジックをここに記述
        return view('detail', ['shop_id' => $shop_id]);
    }
}