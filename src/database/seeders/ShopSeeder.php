<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

class ShopSeeder extends Seeder
{
    public function run()
    {
        $shops = [
            ['name' => '仙人', 'area' => '東京都', 'genre' => '寿司', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'],
            ['name' => '牛助', 'area' => '大阪府', 'genre' => '焼肉', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'],
            ['name' => '戦慄', 'area' => '福岡県', 'genre' => '居酒屋', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg'],
            ['name' => 'ルーク', 'area' => '東京都', 'genre' => 'イタリアン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg'],
            ['name' => '志摩屋', 'area' => '福岡県', 'genre' => 'ラーメン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg'],
            ['name' => '香', 'area' => '東京都', 'genre' => '焼肉', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'],
            ['name' => 'JJ', 'area' => '大阪府', 'genre' => 'イタリアン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg'],
            ['name' => 'らーめん極み', 'area' => '東京都', 'genre' => 'ラーメン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg'],
            ['name' => '鳥雨', 'area' => '大阪府', 'genre' => '居酒屋', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg'],
            ['name' => '築地色合', 'area' => '東京都', 'genre' => '寿司', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'],
            ['name' => '晴海', 'area' => '大阪府', 'genre' => '焼肉', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'],
            ['name' => '三子', 'area' => '福岡県', 'genre' => '焼肉', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'],
            ['name' => '八戒', 'area' => '東京都', 'genre' => '居酒屋', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg'],
            ['name' => '福助', 'area' => '大阪府', 'genre' => '寿司', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'],
            ['name' => 'ラー北', 'area' => '東京都', 'genre' => 'ラーメン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/ramen.jpg'],
            ['name' => '翔', 'area' => '大阪府', 'genre' => '居酒屋', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/izakaya.jpg'],
            ['name' => '経緯', 'area' => '東京都', 'genre' => '寿司', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'],
            ['name' => '漆', 'area' => '東京都', 'genre' => '焼肉', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/yakiniku.jpg'],
            ['name' => 'THE TOOL', 'area' => '福岡県', 'genre' => 'イタリアン', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/italian.jpg'],
            ['name' => '木船', 'area' => '大阪府', 'genre' => '寿司', 'image_url' => 'https://coachtech-matter.s3-ap-northeast-1.amazonaws.com/image/sushi.jpg'],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}