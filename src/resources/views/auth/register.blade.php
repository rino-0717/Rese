@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/auth/register.css')}}">
@section('css')

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>Registration</h2>
            <form>
                <div class="input-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Email" required>
                </div>
                <div class="input-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="button-container">
                    <button type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
</html>