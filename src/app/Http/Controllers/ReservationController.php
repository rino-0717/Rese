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
            'number_of_people' => 'required|integer|min:1|max:100',
        ]);

        $user = Auth::user();
        $reservation = $user->reservations()->create([
            'shop_id' => $request->shop_id,
            'date' => $request->date,
            'time' => $request->time,
            'number_of_people' => $request->number_of_people,
        ]);

        // 予約情報をセッションに保存
        $request->session()->put('reservation', $reservation);

        return redirect()->route('reservation.done');
    }

    public function completePage(Request $request)
    {
        // セッションから予約情報を取得
        $reservation = $request->session()->get('reservation');

        // 予約情報が存在しない場合の処理
        if (!$reservation) {
            return redirect()->route('shop')->with('error', '予約情報が見つかりません。');
        }

        return view('done', compact('reservation'));
    }

    public function delete(ReservationRequest $request)
    {
        // 予約取り消し処理のロジックをここに記述
    }
}