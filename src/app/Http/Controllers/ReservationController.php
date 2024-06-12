<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function create(Request $request)
    {
        // 予約登録処理のロジックをここに記述
    }

    public function completePage()
    {
        // 予約完了ページ表示のロジックをここに記述
        return view('/done');
    }

    public function delete(Request $request)
    {
        // 予約取り消し処理のロジックをここに記述
    }
}