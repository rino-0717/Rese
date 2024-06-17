<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index(Request $request)
    {
        $shops = [
            // 飲食店情報
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
            (object)[
                'id' => 3,
                'name' => '戦慄',
                'area' => '福岡県',
                'genre' => '居酒屋',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 4,
                'name' => 'ルーク',
                'area' => '東京都',
                'genre' => 'イタリアン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 5,
                'name' => '志摩屋',
                'area' => '福岡県',
                'genre' => 'ラーメン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 6,
                'name' => '香',
                'area' => '東京都',
                'genre' => '焼肉',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 7,
                'name' => 'JJ',
                'area' => '大阪府',
                'genre' => 'イタリアン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 8,
                'name' => 'らーめん極み',
                'area' => '東京都',
                'genre' => 'ラーメン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 9,
                'name' => '鳥雨',
                'area' => '大阪府',
                'genre' => '居酒屋',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 10,
                'name' => '築地色合',
                'area' => '東京都',
                'genre' => '寿司',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 11,
                'name' => '晴海',
                'area' => '大阪府',
                'genre' => '焼肉',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 12,
                'name' => '三子',
                'area' => '福岡県',
                'genre' => '焼肉',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 13,
                'name' => '八戒',
                'area' => '東京都',
                'genre' => '居酒屋',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 14,
                'name' => '福助',
                'area' => '大阪府',
                'genre' => '寿司',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 15,
                'name' => 'ラー北',
                'area' => '東京都',
                'genre' => 'ラーメン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 16,
                'name' => '翔',
                'area' => '大阪府',
                'genre' => '居酒屋',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 17,
                'name' => '経緯',
                'area' => '東京都',
                'genre' => '寿司',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 18,
                'name' => '漆',
                'area' => '東京都',
                'genre' => '焼肉',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 19,
                'name' => 'THE TOOL',
                'area' => '福岡県',
                'genre' => 'イタリアン',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg',
                'is_favorite' => true, false,
            ],
            (object)[
                'id' => 20,
                'name' => '木船',
                'area' => '大阪府',
                'genre' => '寿司',
                'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg',
                'is_favorite' => true, false,
            ],
        ];

        $areas = collect($shops)->pluck('area')->unique();
        $genres = collect($shops)->pluck('genre')->unique();

        return view('shop', [
        'shops' => $shops,
        'areas' => $areas,
        'genres' => $genres,
        ]);
    }

    public function detail($shop_id)
    {
        // 飲食店詳細ページ表示のロジックをここに記述
        return view('detail', ['shop_id' => $shop_id]);
    }
}