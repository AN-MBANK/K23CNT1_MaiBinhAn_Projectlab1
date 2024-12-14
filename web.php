<?php

use App\Http\Controllers\mbaSVcontroller;
use Illuminate\Support\Facades\Route;

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

#SV-model
Route::get('/mbaSV', [mbaSVcontroller::class,'mbalist'])->name('mbaSV.mbalist');
Route::get('/mbaSV/create', [mbaSVcontroller::class,'mbacreate'])->name('mbaSV.mbacreate');
Route::get('/mbaSV/create', [mbaSVcontroller::class,'mbacreatesubmit'])->name('mbaSV.mbacreatesubmit');