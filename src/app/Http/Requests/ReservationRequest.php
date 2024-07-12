<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'shop_id' => 'required|exists:shops,id',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'number_of_people' => 'required|integer|min:1|max:100',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '予約日付を入力してください。',
            'date.date' => '予約日付を入力してください。',
            'date.after_or_equal' => '予約日は今日以降の日付を選択してください。',
            'time.required' => '予約時間を入力してください。',
            'number_of_people.required' => '予約人数を入力してください。',
            'number_of_people.min' => '予約人数は1人以上で入力してください。',
            'number_of_people.max' => '予約人数は100人以下で入力してください。',
        ];
    }
}