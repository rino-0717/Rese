@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>会員登録ありがとうございます</h2>
            <form action="{{ route('login.create') }}">
                <div class="button-container">
                    <button type="submit">ログインする</button>
                </div>
            </form>
        </div>
    </div>
@endsection