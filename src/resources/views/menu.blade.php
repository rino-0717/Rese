<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rese</title>
    <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('css')
</head>
<body>
    <div class="menu-container">
        <button class="close-button" onclick="window.history.back();">&times;</button>
        <div class="menu-items">
            <a href="{{ route('shop') }}">Home</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="logout-button">Logout</button>
            </form>
            <a href="{{ route('mypage') }}">Mypage</a>
        </div>
    </div>
</body>
</html>
<!-- ログイン時のページ -->