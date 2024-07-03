<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layouts/header-shop.css') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>

<body>
    <header>
        <a href="{{ auth()->check() ? route('menu') : route('menu2') }}" class="logo">
            <div class="logo-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <div class="logo-text">Rese</div>
        </a>
        <div class="header-container">
            <div class="filters">
                <select name="area" id="area" class="large-select">
                    <option value="all">All area</option>
                    @foreach($areas as $area)
                        <option value="{{ $area }}">{{ $area }}</option>
                    @endforeach
                </select>
                <select name="genre" id="genre" class="large-select">
                    <option value="all">All genre</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre }}">{{ $genre }}</option>
                    @endforeach
                </select>
                <form class="search_box">
                    <div class="search-container">
                        <img src="images/glass.png" alt="glass icon" class="search-icon">
                        <input type="text" placeholder="Search ...">
                    </div>
                </form>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    @yield('content')
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('scripts')
</body>
</html>