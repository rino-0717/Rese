<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    // ユーザー新規登録ページ表示
    public function create()
    {
        return view('auth.register');
    }

    // ユーザー新規登録処理
    public function store(RegisterRequest $request)
    {
        // ユーザー作成
        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ログイン
        Auth::login($user);

        // 完了ページへリダイレクト
        return redirect()->route('register.complete');
    }

    // 完了ページ表示
    public function completePage()
    {
        return view('/thanks');
    }
}