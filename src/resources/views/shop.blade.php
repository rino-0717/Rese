@extends('layouts.header-shop')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/shop.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="shop-list">
            @foreach ($shops as $shop)
                <div class="shop-card">
                    <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
                        <div class="shop-info">
                            <h2>{{ $shop->name }}</h2>
                            <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
                            <div class="button-container">
                                <button type="submit" class="details-button">詳しく見る</button>
                                <button class="goodBtn" data-shop-id="{{ $shop->id }}">
                                    @if ($shop->favorite_shops->contains(auth()->user()))
                                        <i v-if="shop.is_liked" class="fas fa-heart" @click="pushLike(shop)"></i>
                                    @else
                                        <i v-else class="far fa-heart" @click="pushLike(shop)"></i>
                                    @endif
                                </button>
                            </div>
                        </div>
                    </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/like.js') }}"></script>
@endsection