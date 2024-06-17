@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="path/to/logo.png" alt="Logo">
                <span>Rese</span>
            </div>
        </div>
        <div class="content">
            <div class="shop-detail">
                <a href="{{ route('shop.index') }}" class="back-button">&lt;</a>
                <h1>仙人</h1>
                <img src="path/to/shop-image.jpg" alt="Shop Image">
                <p>#東京都 #寿司</p>
                <p>料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。</p>
            </div>
            <div class="reservation-form">
                <h2>予約</h2>
                <form action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <input type="date" name="date" value="2021-04-01">
                    <input type="time" name="time" value="17:00">
                    <select name="number">
                        <option value="1">1人</option>
                        <!-- 他の人数オプションを追加 -->
                    </select>
                    <div class="reservation-summary">
                        <p>Shop: 仙人</p>
                        <p>Date: 2021-04-01</p>
                        <p>Time: 17:00</p>
                        <p>Number: 1人</p>
                    </div>
                    <button type="submit">予約する</button>
                </form>
            </div>
        </div>
    </div>
@endsection