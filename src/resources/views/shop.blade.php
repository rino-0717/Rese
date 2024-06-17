@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="header">
            <div class="filters">
                <select name="area" id="area">
                    <option value="all">All area</option>
                    @foreach($areas as $area)
                        <option value="{{ $area }}">{{ $area }}</option>
                    @endforeach
                </select>
            <select name="genre" id="genre">
                <option value="all">All genre</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre }}">{{ $genre }}</option>
                @endforeach
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
                        <button type="submit" class="details-button">詳しく見る</button>
                        <form action="{{ route('favorite.create') }}" method="post">
                            @csrf
                            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                            <img src="images/heart.png" alt="Like Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection