@extends('layouts.header')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>Registration</h2>
            <form class="register-form" action="{{ route('register.store') }}" method="post">
                @csrf
                <div class="input-group">
                    <img src="images/user.png" alt="User Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="text" name="username" id="username" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <p class="register-form__error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-group">
                    <img src="images/mail.png" alt="Mail Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="email" name="email" id="email" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <p class="register-form__error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-group">
                    <img src="images/password.png" alt="Password Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="password" name="password" id="password" placeholder="Password" required>
                    @error('password')
                        <p class="register-form__error-message">{{ $message }}</p>
                    @enderror
                </div>
                <div class="button-container">
                    <button type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection