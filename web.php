<?php

use App\Http\Controllers\AMBsessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AMBAccountController;
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

#test Ssion
route ::get('/AMB-Session/get',[AMBsessionController::class,'AMBGetsessionData'])->name('AMBSs.get');
route ::get('/AMB-Session/set',[AMBsessionController::class,'AMBStoresessionData'])->name('AMBSs.set');
route ::get('/AMB-Session/del',[AMBsessionController::class,'AMBDeleteSessionData'])->name('AMBSs.del');


#Account
route::get('/AMB-login',[AMBAccountController::class,'AMBLogin'])->name('AMBAccount.AMBLogin');
route::post('/AMB-login',[AMBAccountController::class,'AMBLoginsubmit'])
->name('AMBAccount.AMBLoginsubmit');