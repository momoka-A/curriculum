<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\TweetController;

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

Route::get('/', [AuthController::class, 'showLogin'])->name('showLogin');

// ホーム画面
Route::get('/tweet', [TweetController::class, 'index']);
// 投稿
Route::post('/tweet', [TweetController::class, 'create']);

// 削除
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashbord', function () {
        return view('dashbord');
    })->name('dashbord');
});
