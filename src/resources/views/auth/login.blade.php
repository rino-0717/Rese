@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>Login</h2>
            <form class="login-form" action="{{ route('login.store') }}" method="post">
                @csrf
                <div class="input-group">
                    <img src="images/mail.png" alt="Mail Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="login-form__error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-group">
                    <img src="images/password.png" alt="Password Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    @error('password')
                        <p class="login-form__error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="button-container">
                    <button type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection