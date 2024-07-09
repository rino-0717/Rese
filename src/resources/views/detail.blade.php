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
                <form id="reservation-form" action="{{ route('reservation.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="shop_id" value="{{ $shop->id }}">
                    <label for="date"></label>
                    <input type="date" id="date" name="date" required>
                    <label for="time"></label>
                    <select id="time" name="time" required>
                        <!-- JavaScriptでオプションを動的に生成 -->
                    </select>
                    <label for="number_of_people"></label>
                    <select id="number_of_people" name="number_of_people" required>
                        @for ($i = 1; $i <= 100; $i++)
                            <option value="{{ $i }}">{{ $i }}人</option>
                        @endfor
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
    <script>
        document.getElementById('date').addEventListener('change', function() {
            document.getElementById('summary-date').textContent = this.value;
        });
        document.getElementById('time').addEventListener('change', function() {
            document.getElementById('summary-time').textContent = this.value;
        });
        document.getElementById('number_of_people').addEventListener('change', function() {
            document.getElementById('summary-number').textContent = this.options[this.selectedIndex].text;
        });

        // 今日以前の日付を無効にする
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('date').setAttribute('min', today);

        // 9時から21時までの30分単位でオプションを生成
        const timeSelect = document.getElementById('time');
        for (let hour = 9; hour <= 21; hour++) {
            for (let minute = 0; minute < 60; minute += 30) {
                const option = document.createElement('option');
                const time = `${String(hour).padStart(2, '0')}:${String(minute).padStart(2, '0')}`;
                option.value = time;
                option.textContent = time;
                timeSelect.appendChild(option);
            }
        }
    </script>
</body>
</html>