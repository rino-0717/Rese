<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menu.css')}}">
    <title>Rese</title>
</head>
<body>
    <div class="menu-container">
        <button class="close-button">&times;</button>
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