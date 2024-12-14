<?php

namespace App\Http\Controllers;


use App\Models\mbaSV;
use Illuminate\Http\Request;

class mbaSVcontroller extends Controller
{
    //CRUD
    public function mbalist()
    {
        // late all to dsSV
        $mbaSVs= mbaSV::all();
        return view('mbaSV.mbalist' , ['mbaSVs'=>$mbaSVs]);
    }
    // create (insert)
    public function mbacreate(){
        return view('mbaSV.mbacreate');
    }

    #createsubmit
    public function mbacreatesubmit(request $request){
        //late dlieu sm tren form, an cho cac th t cua doi tuong sv
        $mbaSV= new mbaSV();
        $mbaSV->MSV = $request->MSV;
        $mbaSV->HSV = $request->HSV;
        $mbaSV->TSV = $request->TSV;
        $mbaSV->PHAI = $request->PHAI;
        $mbaSV->DATE = $request->DATE;
        $mbaSV->NOISINH = $request->NOISINH;
        $mbaSV->MKh = $request->MKh;
        
        // ghi vao bang csdl
        $mbaSV->save();
      //  return view('mbaSV.mbacreate');
        return back()->with('mbaSV_create','missioncomplete');
    }
}
