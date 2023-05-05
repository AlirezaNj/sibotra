<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/tutorial', function () {
    return view('tutorial');
})->name('tutorial');

Route::get('/about', function () {
    return view('about');
})->name('about');

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/token', [App\Http\Controllers\Auth\TokenController::class, 'index'])->name('token');
Route::get('/sendToken', [App\Http\Controllers\Auth\TokenController::class, 'sendToken'])->name('sendToken');
Route::post('/token', [App\Http\Controllers\Auth\TokenController::class, 'verifyToken'])->name('verifyToken');
Route::patch('/dashboard/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update')->middleware('auth');
Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'redirect'])->name('auth.google');
Route::get('/auth/google/callback', [App\Http\Controllers\Auth\GoogleController::class, 'callback']);
Route::get('/payment', [PaymentController::class, 'createPayment'])->name('payment.create')->middleware('auth');

