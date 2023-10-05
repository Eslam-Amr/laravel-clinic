<?php

namespace App\Http\Controllers;

use App\Models\doctor;
use Illuminate\Http\Request;

class doctorController extends Controller
{
    //
     function index(){
        $doctors=doctor::select('doctors.*','majors.title')->join('majors','doctors.major_id','=','majors.id')->paginate(8);
        // dd($doctors);
        // $doctors=doctor::paginate(8);

        return view('doctor.index',['doctors'=>$doctors]);
    }
    function docDetails($id){
        $id=request()->id;
        // dd($id);

        // $doctor=doctor::find($id);
        $doctor=doctor::find($id);
        // dd($doctor);
        return view('doctor.detalis',['doctor'=>$doctor]);
    }
}
