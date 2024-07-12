@extends('layouts.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
@endsection

@section('content')
    < class="container">
            <h1>{{ Auth::user()->name }}さん</h1>
            <div class="reservation-status">
                <h2>予約状況</h2>
                @foreach ($reservations as $reservation)
                    <div class="reservation-card">
                        <div class="reservation-header">
                            <span class="reservation-title">予約{{ $loop->iteration }}</span>
                            <button class="delete-button" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $reservation->id }}').submit();">×</button>
                            <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservation.delete', $reservation->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                            </form>
                        </div>
                        <div class="reservation-details">
                            <p>Shop: {{ $reservation->shop->name }}</p>
                            <p>Date: {{ $reservation->date }}</p>
                            <p>Time: {{ $reservation->time }}</p>
                            <p>Number: {{ $reservation->number_of_people }}人</p>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="favorite-shops">
                <h2>お気に入り店舗</h2>
                <div class="shop-list">
                    @foreach ($favorites as $favorite)
                        <div class="shop-card">
                            <img src="{{ $favorite->shop->image_url }}" alt="{{ $favorite->shop->name }}">
                            <div class="shop-info">
                                <h3>{{ $favorite->shop->name }}</h3>
                                <p>#{{ $favorite->shop->area }} #{{ $favorite->shop->genre }}</p>
                                <button type="button" class="details-button" onclick="location.href='{{ route('shop', $favorite->shop->id) }}'">詳しく見る</button>
                                <button class="like-button" onclick="event.preventDefault(); document.getElementById('like-form-{{ $favorite->shop->id }}').submit();">
                                    <img src="{{ asset('images/like.png') }}" alt="Like Icon">
                                </button>
                                <form id="like-form-{{ $favorite->shop->id }}" action="{{ route('favorites.toggle', $favorite->shop->id) }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/unlike.js') }}"></script>
@endsection