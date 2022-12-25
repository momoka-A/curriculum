<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/news/create', [NewsController::class, 'add']);
Route::post('/admin/news/create', [NewsController::class, 'create']);
Route::get('/admin/news', [NewsController::class, 'index']);
Route::get('/admin/news/edit', [NewsController::class, 'edit']);
Route::post('/admin/news', [NewsController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
