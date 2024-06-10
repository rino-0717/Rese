<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/layouts/base.css') }}" />
    @yield('css')
</head>

<body>
    <div class="logo">
        <div class="logo-icon">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
        </div>
        <div class="logo-text">Rese</div>
    </div>
    <main>
        @yield('content')
    </main>
</body>