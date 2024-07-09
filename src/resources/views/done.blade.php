@extends('layouts.header')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
    <div class="container">
        <h1>予約が完了しました</h1>
        <p>ご予約ありがとうございます。</p>
        <a href="{{ route('shop') }}" class="button">戻る</a>
    </div>
@endsection