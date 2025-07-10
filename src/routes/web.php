<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;

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

// お問い合わせフォームのルート
Route::get('/profile', [ContactController::class, 'profile'])->middleware('auth');
Route::get('/contact', [ContactController::class, 'contactform']);
Route::post('/contacts/confirm', [ContactController::class, 'confirm']);
Route::post('/contacts', [ContactController::class, 'store']);


Route::get('/', [AuthController::class, 'index']);

// 認証画面のルート

// Route::middleware('auth')->group(function () {
//     Route::get('/', [AuthController::class, 'index']);
// });
