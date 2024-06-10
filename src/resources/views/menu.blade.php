@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css')}}">
@section('css')

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>会員登録ありがとうございます</h2>
            <form>
                <div class="button-container">
                    <button type="submit">ログインする</button>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
</html>