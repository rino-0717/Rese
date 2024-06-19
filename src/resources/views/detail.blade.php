@extends('layouts.header-shop')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="shop-detail">
            <h2>{{ $shop->name }}</h2>
            <img src="{{ $shop->image_url }}" alt="{{ $shop->name }}">
            <p>エリア: {{ $shop->area }}</p>
            <p>ジャンル: {{ $shop->genre }}</p>
            <p>詳細情報: ...</p>
        </div>
    </div>
@endsection