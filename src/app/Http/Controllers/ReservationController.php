<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function create(ReservationRequest $request)
    {
        // 予約作成のロジックをここに記述
        return redirect()->route('reserve.complete');
    }

    public function completePage()
    {
        // 予約完了ページ表示のロジックをここに記述
        return view('/done');
    }

    public function delete(ReservationRequest $request)
    {
        // 予約取り消し処理のロジックをここに記述
    }
}