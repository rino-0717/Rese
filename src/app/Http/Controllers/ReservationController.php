<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Http\Requests\ReservationRequest;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'date' => 'required|date',
            'time' => 'required',
            'number' => 'required|integer|min:1',
        ]);

        $user = Auth::user();
        // reservations() メソッドが正しく定義されているか確認
        $user->reservations()->create([
            'shop_id' => $request->shop_id,
            'date' => $request->date,
            'time' => $request->time,
            'number' => $request->number,
        ]);

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