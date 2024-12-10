<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MHcontroller extends Controller
{
    //# read dlieu tu bang mh
    public function MHList(){
        // truy van read dlieu tu bang mh
        $mbamhs = DB::select("select * from mbamh");
        // chuyen dlieu leen view de hien thi 
        return view('mbamh.MHList',['mbamhs' => $mbamhs]);
    }
    //# chi tiet khoa
    public function MBAMH($mamh){
        $MH= DB::select("select * from mbamh where MBAMAMH=?",[$mamh])[0];
        return view('mbamh.MHDetail', ['mh'=>$MH]);
    }
    //# edit - get khoa
    public function MHEdit($mamh){
        $MH= DB::select("select * from mbamh where MBAMAMH=?",[$$mamh])[0];
        return view('mbamh.MHEdit', ['mh'=>$MH]); 
    }
    //# editsubmit
    public function MHEditsubmit(request $request){
       // lay dlieu tr form sua
       $mamh =$request->input('MBAMAMH');
       $tenmh= $request->input('MBATENMH');
       $sitinchi=$request->input('MBASOTINCHI');
       DB::update("UPDATE mbamh SET MBATENMH =  ? where MBAMAMH = ? ",[$mamh,$tenmh]);
       return redirect('/mh');
    }   
}
