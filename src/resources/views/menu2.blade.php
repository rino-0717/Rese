<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/menu2.css')}}">
    <title>Rese</title>
</head>
<body>
    <div class="menu-container">
        <button class="close-button" onclick="window.history.back();">&times;</button>
        <div class="menu-items">
            <a href="{{ route('shop') }}">Home</a>
            <a href="{{ route('register.create') }}">Registration</a>
            <a href="{{ route('login.create') }}">Login</a>
        </div>
    </div>
</body>
</html>
<!-- ログインしていな場合のページ -->