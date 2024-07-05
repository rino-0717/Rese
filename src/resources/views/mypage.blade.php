@extends('layouts.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="user-info">
            <h1>{{ Auth::user()->name }}さん</h1>
    <h2>予約状況</h2>
    <!-- 予約情報を表示 -->
    @foreach($reservations as $reservation)
        <div class="reservation-card">
            <h3>予約{{ $loop->iteration }}</h3>
            <p>Shop: {{ $reservation->shop->name }}</p>
            <p>Date: {{ $reservation->date }}</p>
            <p>Time: {{ $reservation->time }}</p>
            <p>Number: {{ $reservation->number }}人</p>
        </div>
    @endforeach

    <h2>お気に入り店舗</h2>
    <div class="shop-list">
            @foreach (auth()->user()->likes as $shop)
                <div class="shop-card" data-shop-id="{{ $shop->id }}">
                    <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
                    <div class="shop-info">
                        <h2>{{ $shop->name }}</h2>
                        <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
                        <button type="button" class="btn btn-danger unlike-button">❤️</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/unlike.js') }}"></script>
@endsection