<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AMBMHController extends Controller
{
    //#1. list mh
    public function mbalist()
    {
        $mbamh = DB::table('mbamh')->get();
        return view('mbamh.mbalist',['mbamh' =>$mbamh]);
    }
}
