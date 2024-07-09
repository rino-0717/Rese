<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Menu2Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Fortifyのルートを設定
Fortify::loginView(function () {
    return view('auth.login');
});
Fortify::registerView(function () {
    return view('auth.register');
});
Route::get('/', function () {
    return view('welcome');
});

//ユーザー新規登録
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register.create');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register.store');
Route::get('/thanks', [RegisteredUserController::class, 'completePage'])->name('register.complete');

// ユーザーログイン/ログアウト
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login.create');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login.store');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// マイページ
Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');

// 飲食店表示
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/shop/{id}', [ShopController::class, 'show'])->name('shop.show');
Route::post('/shop/{id}/like', [ShopController::class, 'like'])->name('shop.like');
// 検索用のルートを追加
Route::get('/shop', [ShopController::class, 'search'])->name('shop.search');

// お気に入り
Route::post('/like/{shopId}', [LikeController::class, 'like'])->name('like');
Route::post('/unlike/{shopId}', [LikeController::class, 'unlike'])->name('unlike');

// 予約
Route::post('/reservation', [ReservationController::class, 'store'])->name('reservation.store');
Route::get('/done', [ReservationController::class, 'completePage'])->name('reservation.done');
Route::delete('/reservation', [ReservationController::class, 'delete'])->name('reservation.delete');

//メニューページ
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/menu2', [Menu2Controller::class, 'index'])->name('menu2');