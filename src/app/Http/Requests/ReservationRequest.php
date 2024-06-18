<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ReservationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'date' => [
                'required',
                'date',
                Rule::afterOrEqual(now()->toDateString())
            ],
            'time' => 'required|date_format:H:i',
            'number' => 'required|integer|min:1',
        ];
    }

    public function messages()
    {
        return [
            'date.required' => '予約日付を入力してください',
            'time.required' => '予約時間を入力してください',
            'number.required' => '予約人数を入力してください',
        ];
    }
}