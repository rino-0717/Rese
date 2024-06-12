@extends('layouts.base')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/done.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="form-container">
            <h2>ご予約ありがとうございます</h2>
            <!-- <form action="{{ route('login.create') }}"> -->
                <div class="button-container">
                    <button type="submit">戻る</button>
                </div>
            </form>
        </div>
    </div>
@endsection