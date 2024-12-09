<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AMBsessionController extends Controller
{
    //#doc dlieu tu ss
    public function AMBsessionData(request $request){
        if($request ->session()->has("K23CNT1_AMB")){
            echo"<h2> Ss Data:". $request->session()->get("K23CNT1_AMB");
        }else{
            echo "<h2> KO ton tai tai session</h2>";
        }
    }
    //# ghi dlieu vao Ssion
    public function AMBStoresessionData(request $request)
    {
        //save
        $request->session()->put('K23CNT1_AMB','AMB - win - top1');
        echo "<h2> du lieu da dc luu vao Ssion </h2>";
    }

    //#delete dlieu trong Ssion
   public function AMBDeleteSessionData(request $request)
   {
    $request->session()->forget('K23CNT1_AMB');
    echo "<h2> du lieu da dc xoa khoi Ssion";
   } 
}
