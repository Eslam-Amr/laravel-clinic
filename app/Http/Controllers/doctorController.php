<?php

namespace App\Http\Controllers;

use App\Models\booking;
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
    function docBook($id,Request $request){
        // $id=request()->id;
        // dd($id,$request->all());
booking::create([
    'name'=>$request->name,
    'email'=>$request->email,
    'phone'=>$request->phone,
    'date'=>date("d/m/y"),
    'doctor_id'=>$id,
    'status'=>"pending",
]);
        // $doctor=doctor::find($id);
        // $doctor=doctor::find($id);
        // dd($doctor);
        // return view('doctor.booking');
        return back()->with('message','booking done successfly');
    }
}
