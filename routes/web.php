<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// 🔽 追加
use App\Http\Controllers\ReserveController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 🔽 追加
Route::resource('reserve', ReserveController::class);
Route::get('/reserve/confirm/{id}', 'App\Http\Controllers\ReserveController@confirm')->name('reserve.confirm');
// 予約完了画面へのルートを追加
Route::get('/reserve/complete/{id}', [ReserveController::class, 'complete'])->name('reserve.complete');

Route::get('/reserves', 'App\Http\Controllers\ReserveController@index')->name('reserve.index');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';