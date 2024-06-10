@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css')}}">
@section('css')

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>ご予約ありがとうございます</h2>
            <form>
                <div class="button-container">
                    <button type="submit">戻る</button>
                </div>
            </form>
        </div>
    </div>
@endsection('content')
</html>