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
                                    <button type="button" class="details-button" onclick="location.href='{{ route('login.create') }}'">詳しく見る</button>
                                @endif
                                <span class="like-button" data-shop-id="{{ $shop->id }}">
                                    <i class="fa {{ $shop->isLikedBy(auth()->user()) ? 'fa-heart' : 'fa-heart-o' }}"></i>
                            </span>
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