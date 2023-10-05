<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\major;
use Illuminate\Http\Request;

class majorController extends Controller
{
    //
    function index(){
        $majors=major::paginate(8);
        return view('major.index',['majors'=>$majors]);
    }
    function majordoc($id){
        // dd($id);
        $doctors=doctor::where('major_id',$id)->paginate(8);
        // dd($doctors);
        return view('major.majordoc',['doctors'=>$doctors]);
    }
}
