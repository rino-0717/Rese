<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
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
        <div class="container">
            <div class="shop-detail">
                <div class="header">
                    <a href="{{ route('shop') }}" class="back-button">&lt;</a>
                    <h1>{{ $shop->name }}</h1>
                </div>
                <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
                <p>#{{ $shop->area }} #{{ $shop->genre }}</p>
                <p>{{ $shop->introduction }}</p>
            </div>
            <div class="reservation-form">
                <h2>予約</h2>
                <form action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                    <label for="date"></label>
                    <input type="date" id="date" name="date" required>
                    <label for="time"></label>
                    <input type="time" id="time" name="time" required>
                    <label for="number"></label>
                    <select id="number" name="number" required>
                        <option value="1">1人</option>
                        <option value="2">2人</option>
                        <option value="3">3人</option>
                        <option value="4">4人</option>
                        <option value="4">5人</option>
                        <option value="4">6人</option>
                        <option value="4">7人</option>
                        <option value="4">8人</option>
                        <option value="4">9人</option>
                        <option value="4">10人</option>
                    </select>
                    <div class="reservation-summary">
                        <p>Shop: {{ $shop->name }}</p>
                        <p>Date: <span id="summary-date"></span></p>
                        <p>Time: <span id="summary-time"></span></p>
                        <p>Number: <span id="summary-number"></span></p>
                    </div>
                    <button type="submit">予約する</button>
                </form>
            </div>
        </div>
    </main>
    @yield('scripts')

    <script>
        document.getElementById('date').addEventListener('change', function() {
            document.getElementById('summary-date').textContent = this.value;
        });
        document.getElementById('time').addEventListener('change', function() {
            document.getElementById('summary-time').textContent = this.value;
        });
        document.getElementById('number').addEventListener('change', function() {
            document.getElementById('summary-number').textContent = this.options[this.selectedIndex].text;
        });
    </script>
</body>
</html>