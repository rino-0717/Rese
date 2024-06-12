@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@section('css')

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>Registration</h2>
            <form class="register-form" action="{{ route('register') }}" method="post">
            @csrf
                <div class="input-group">
                    <img src="images/user.png" alt="User Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="text" name="name" id="name" placeholder="Username" required>
                    <p class="register-form__error-message">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                </div>
                <div class="input-group">
                    <img src="images/mail.png" alt="Mail Icon" style="width: 24px; height: 24px; margin-right: 8px;">
                    <input type="mail" name="email" id="email" placeholder="Email" required>
                    <p class="register-form__error-message">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
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
                    <button type="submit">登録</button>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </form>
        </div>
    </div>
@endsection('content')
</html>