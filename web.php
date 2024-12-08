<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AMBController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login', [AMBController::class, 'showForm']); // Hiển thị form đăng ký
Route::post('/login', [AMBController::class, 'handlelogin'])->name('login.submit'); // Xử lý đăng ký
