<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Providers\RouteServiceProvider;
use App\Models\User;

class RegisteredUserController extends Controller
{
    // ユーザー新規登録ページ表示
    public function create()
    {
        return view('auth.register');
    }

    // ユーザー新規登録処理
    public function store(Request $request)
    {
        // バリデーション
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // ユーザー作成
        $user = \App\Models\User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // ログイン
        Auth::login($user);

        // 完了ページへリダイレクト
        return redirect()->route('register.complete');
    }

    // ユーザー新規登録完了ページ表示
    public function completePage()
    {
        return view('/thanks');
    }
}