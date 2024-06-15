@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="user-info">
            <h2>testさん</h2>
        </div>
        <div class="content">
            <div class="reservation-status">
                <h3>予約状況</h3>
                <div class="reservation-card">
                    <div class="reservation-header">
                        <span></span>
                        <button class="close-button">&times;</button>
                    </div>
                    <div class="reservation-details">
                        <p>Shop: </p>
                        <p>Date: </p>
                        <p>Time: </p>
                        <p>Number: </p>
                    </div>
                </div>
            </div>
            <div class="favorite-shops">
                <h3>お気に入り店舗</h3>
                <div class="shop-card">
                    <img src="path/to/shop1.jpg" alt="Shop 1">
                    <div class="shop-info">
                        <h2>仙人</h2>
                        <p>#東京都 #寿司</p>
                        <button class="details-button">詳しく見る</button>
                        <img src="path/to/heart.png" alt="Like Icon" class="like-icon">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection