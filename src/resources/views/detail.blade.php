<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layouts/detail') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body>
    <header>
        <a href="{{ Auth::check() ? route('menu') : route('menu2') }}" class="logo">
        <div class="logo-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="logo-text">Rese</div>
        </a>
    </header>
    <main>
        <div class="shop-detail-container">
        <h1>{{ $shop->name }}</h1>
        <p>{{ $shop->introduction }}</p>
        <form action="{{ route('reservation.store') }}" method="POST">
            @csrf
            <input type="hidden" name="shop_id" value="{{ $shop->id }}">
            <div class="form-group">
                <label for="date">予約日:</label>
                <input type="date" name="date" id="date" required>
            </div>
            <div class="form-group">
                <label for="time">予約時間:</label>
                <input type="time" name="time" id="time" required>
            </div>
            <div class="form-group">
                <label for="number_of_people">人数:</label>
                <input type="number" name="number_of_people" id="number_of_people" required>
            </div>
            <button type="submit" class="reserve-button">予約する</button>
        </form>
    </div>
    </main>
</body>
</html>