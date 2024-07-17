    @extends('layouts.header')
    @section('css')
        <link rel="stylesheet" href="{{ asset('css/mypage.css') }}">
    @endsection

    @section('content')
        <div class="container">
            <h1>{{ Auth::user()->name }}さん</h1>
            <div class="main-content">
                <div class="reservation-status">
                    <h2>予約状況</h2>
                    @foreach ($reservations as $reservation)
                        <div class="reservation-card">
                            <div class="reservation-header">
                                <span class="reservation-title">予約{{ $loop->iteration }}</span>
                                <button class="delete-button" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $reservation->id }}').submit();">×</button>
                                <form id="delete-form-{{ $reservation->id }}" action="{{ route('reservations.destroy', $reservation->id) }}" method="POST" style="display: none;">
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
                        @foreach ($likes as $like)
                            <div class="shop-card">
                                <img src="{{ $like->shop->image_url }}" alt="{{ $like->shop->name }}">
                                <div class="shop-info">
                                    <h3>{{ $like->shop->name }}</h3>
                                    <p>#{{ $like->shop->area }} #{{ $like->shop->genre }}</p>
                                    <button type="button" class="details-button" onclick="location.href='{{ route('shop', $like->shop->id) }}'">詳しく見る</button>
                                    <button class="like-button" onclick="event.preventDefault(); document.getElementById('like-form-{{ $like->shop->id }}').submit();">
                                        <img src="{{ asset('images/like.png') }}" alt="Like Icon">
                                    </button>
                                    <form id="like-form-{{ $like->shop->id }}" action="{{ route('like', $like->shop->id) }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
        <script src="{{ asset('js/unlike.js') }}"></script>
    @endsection