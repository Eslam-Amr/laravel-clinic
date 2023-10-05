<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use App\Models\major;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    function index(){
        // $doctors=doctor::get();
        $doctors=doctor::select('doctors.*','majors.title')->join('majors','doctors.major_id','=','majors.id')->get();

        $majors=major::get();
        return view('home.index',['doctors'=>$doctors,'majors'=>$majors]);
    }
}
