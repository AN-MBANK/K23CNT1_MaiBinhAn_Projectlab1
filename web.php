<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\MHcontroller;
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
#mh
route::get('/mh',[MHcontroller::class,'MHList'])->name('mbamh.MHList');
route::get('/mh/detail/{mamh}',[MHcontroller::class,'mbamh'])->name('mbamh.mbamh');
route::get('/mh/edit/{mamh}',[MHcontroller::class,'mhedit'])->name('mbamh.mhedit');
route::get('/mh/edit',[MHcontroller::class,'mheditsubmit'])->name('mbamh.mheditsubmit');