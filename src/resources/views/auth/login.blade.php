@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
@section('css')

@section('content')
    <div class="form-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Email" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" required>
            </div>
            <div class="button-container">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
@endsection('content')
</html>