@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <h1>Rese</h1>
            <div class="filters">
                <select name="area" id="area">
                    <option value="all">All area</option>
                    <!-- 他のエリアオプションを追加 -->
                </select>
                <select name="genre" id="genre">
                    <option value="all">All genre</option>
                    <!-- 他のジャンルオプションを追加 -->
                </select>
                <input type="text" placeholder="Search ...">
            </div>
        </div>
        <div class="shop-list">
            @foreach ($shops as $shop)
                <div class="shop-card">
                    <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
                    <div class="shop-info">
                        <h2>{{ $shop->name }}</h2>
                        <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
                        <form action="{{ route('/detail', ['shop_id' => $shop->id]) }}" method="get">
                            <button type="submit">詳しく見る</button>
                        </form>
                        <form action="{{ route('favorite.create') }}" method="post">
                            @csrf
                            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                            <button type="submit" class="favorite-button">
                                <i class="fa{{ $shop->is_favorite ? 's' : 'r' }} fa-heart"></i>
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection