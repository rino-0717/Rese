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
                                @if(auth()->check())
                                    <button type="button" class="details-button" onclick="location.href='{{ route('detail', $shop->id) }}'">詳しく見る</button>
                                @else
                                    <button type="button" class="details-button" onclick="location.href='{{ route('login.creat') }}'">詳しく見る</button>
                                @endif
                                <button class="goodBtn" data-shop-id="{{ $shop->id }}">
                                    @if ($shop->favorite_shops->contains(auth()->user()))
                                        @verbatim
                                        <i v-if="shop.is_liked" class="fas fa-heart" @click="pushLike(shop)"></i>
                                        @endverbatim
                                    @else
                                        @verbatim
                                        <i v-else class="far fa-heart" @click="pushLike(shop)"></i>
                                        @endverbatim
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