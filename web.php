<?php

use App\Http\Controllers\AMBKHOAcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AMBMHcontroller;
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



#khoa
route::get('/khoa',[AMBKHOAcontroller::class,'amblist'])->name('ambkhoa.amblist');

#khoa - detail

route::get('/khoa/detail/{makhoa}',[AMBKHOAcontroller::class,'ambkhoa'])->name('ambkhoa.ambkhoa');

#khoa - edit
route::get('/khoa/edit/{makhoa}',[AMBKHOAcontroller::class,'ambedit'])->name('ambkhoa.ambedit');
route::get('/khoa/edit',[AMBKHOAcontroller::class,'ambeditsubmit'])->name('ambkhoa.ambeditsubmit');

# khoa-insert
route::get('/khoa/ambinsert',[AMBKHOAcontroller::class,'ambinsert'])->name('ambkhoa.ambinsert');
route::post('/khoa/ambinsert',[AMBKHOAcontroller::class,'ambinsertsubmit'])->name('ambkhoa.ambinsertsubmit');
# khoa - delete
route::get('/khoa/delete/{makhoa}',[AMBKHOAcontroller::class,'ambdelete'])->name('ambkhoa.ambdelete');
#mh
route::get('/mh',[AMBMHcontroller::class,'mbalist'])->name('mba.mbalist');
