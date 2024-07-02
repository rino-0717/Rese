<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
        public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'number_of_people' => 'required|integer|min:1',
        ]);

        // 予約データの保存
        $reservation = new Reservation();
        $reservation->shop_id = $request->input('shop_id');
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->number = $request->input('number_of_people');
        $reservation->save();

        // 完了ページにリダイレクト
        return redirect()->route('done');
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