@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/login.css')}}">
@section('css')

@section('content')
    <div class="form-container">
        <h2>Login</h2>
        <form>
            <div class="input-group">
                <img src="images/mail.png" alt="Mail Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="mail" name="email" id="email" placeholder="Email" required>
                    <p class="register-form__error-message">
                        @error('email')
                            {{ $message }}
                        @enderror
            </div>
            <div class="input-group">
                <img src="images/password.png" alt="Password Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    <p class="register-form__error-message">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
            </div>
            <div class="button-container">
                <button type="submit">ログイン</button>
            </div>
        </form>
    </div>
@endsection('content')
</html>