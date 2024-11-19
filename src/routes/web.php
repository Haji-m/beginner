<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\MiddlewareController;

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

// 初期値でindex.blade.phpを表示させる。
Route::get('/', [AtteController::class, 'index']);

// 登録画面の表示。
Route::get('/create', [AtteController::class, 'create'])->name('register.create');
// 登録処理。
Route::post('/store', [AtteController::class, 'store'])->name('register.store');

Route::get('register', [RegisteredUserController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisteredUserController::class, 'register']);

// loginの表示処理。
Route::get('/login', [AuthenticatedSessionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'login']);

// ログイン済みの場合のみ画面を表示。
Route::middleware('auth')->group(function () {
    Route::get('/stamp', [AtteController::class, 'showStamp']);
});

//middlewareの設定。
// Route::get('/middleware', [AtteController::class, 'index']);
// +Route::post('/middleware', [AtteController::class, 'post'])->middleware('atte');

// ボタンを押すとindex.blade.phpを表示させる。
Route::get('/index', function () {
    return view('index');
})->name('index');

// ボタンを押すとlogin.blade.phpを表示させる。
Route::get('/login', function () {
    return view('login');
})->name('login');

// ボタンを押すとregister.blade.phpを表示させる。
Route::get('/register', function () {
    return view('register');
})->name('register');

// ボタンを押すとstamp.blade.phpを表示させる。
Route::get('/stamp', function () {
    return view('stamp');
})->name('stamp');

// ボタンを押すと attendance.blade.phpを表示させる。
Route::get('/attendance', function () {
    return view('attendance');
})->name('attendance');