<?php

namespace App\Http\Controllers;

use App\Models\booking;
use App\Models\contact;
use App\Models\doctor;
use App\Models\major;
use App\Models\User;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    //
    function index()
    {
        return view('admin.index');
    }
    function addDoctor()
    {
        return view('admin.addDoctor');
    }
    function addMajor()
    {
        return view('admin.addMajor');
    }
    function addM(Request $request)
    {

        $request->validate([
            'title' => 'required|min:3|max:30',
            'image'=>'required|image|mimes:png,jpg,jpeg,gif|mimetypes:image/jpeg,image/png,image/gif'
            ]);
            // dd($request->file());
            // dd($request->all('major-image'));

            $image =$request->file('image');
            // dd($request->file('imagem'));
            $ext=$image->getClientOriginalExtension();
            $img=time().rand(10000,20000).rand(10000,20000).'.'.$ext;
            $image->move(public_path('uplode'),$img);
            // dd($image);
            major::create([
                'title' => $request->title,
                'image' => $img
                ]);
                // dd($request->all());
                return redirect()->route('admin.addMajor')->with('message','added successfly');
            // echo "ewuifheiwhjfi";
        }
    function addD(Request $request)
    {
// dd($request->file('image'));
        // $major_id->validate(['int']);
        $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'bio' => 'required|min:5|max:500',
            'major' => 'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,gif|mimetypes:image/jpeg,image/png,image/gif'
            // 'image'=>'image'
            ]);
            $image =$request->file('image');
            $ext=$image->getClientOriginalExtension();
            $img=time().rand(10000,20000).rand(10000,20000).'.'.$ext;
            $image->move(public_path('doctorImage'),$img);
        $major_id = major::where('title', '=', $request->major)->first()->id;
        // dump($major_id);
        // dump($request->name);
        // dump($request->email);
        // dump($request->bio);
        // dump($request->major);
        // $request->only('name','email','bio','image'),$major_id->('major_id')
        doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'major_id' => $major_id,
            'bio' => $request->bio,
            'image' => $img
        ]);

        // dd($request);
        return redirect()->route('admin.addDoctor')->with('message','added successfly');
    }
    function disUsers()
    {
        // echo "eslam elmarg ";
        $users = User::paginate(5);
        // dd($users);
        return  view('admin.disUsers', ['users' => $users]);
    }
    function booking()
    {
        // echo "eslam elmarg ";
        // $bookings=booking::paginate(5);
        // $doc=doctor::get()->where('id',$bookings->id);
        $bookings=booking::select('bookings.*','doctors.name as doctorName')->join('doctors','doctors.id','=','bookings.doctor_id')->paginate(5);
        // dd($doctors);
        // dd($data);
        // $users=::get();
        // dd($users);
        return  view('admin.booking',['bookings'=>$bookings ]);
    }
    function deleteBooking($id){
        DB::table('bookings')->where('id', $id)->delete();
        return redirect()->to('/admin/booking')->with('message','deleted successfly');
    }
    function rejBooking($id){
        // dd($id);
booking::find($id)->update(['status' => 'rejected']);
        return redirect()->to('/admin/booking')->with('message','updated successfly');
    }
    function penBooking($id){
        // dd($id);
booking::find($id)->update(['status' => 'pending']);
        return redirect()->to('/admin/booking')->with('message','updated successfly');
    }
    function compBooking($id){
        // dd($id);
booking::find($id)->update(['status' => 'completed']);
        return redirect()->to('/admin/booking')->with('message','updated successfly');
    }
    function contact()
    {
        $contact = contact::paginate(5);
        return view('admin.contact', ['contacts' => $contact]);
    }
    function editUser($id)
    {
        $user = User::find($id);
        return view('admin.userUpdate', ['user' => $user]);
    }
    function updateUser($id, Request $request)
    {
        // dd($data);
        $request->validate([
            'name' => 'required|min:3|max:30',
            'email' => "required|email|unique:users,email,$id",
            'phone' => 'required',
        ]);
        $request->only('name', 'email', 'phone');
        User::find($id)->update($request->except('token'));
        return redirect()->to('/admin/users')->with('message','updated successfly');
        // dd($id);
        // lknkdnklmlkg;

    }
    function deleteUser($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect()->to('/admin/users')->with('message','deleted successfly');
        // dd($id);
    }
    function deleteMessage($id)
    {
        // dd($id);
        DB::table('contacts')->where('id', $id)->delete();
        return redirect()->to('/admin/contact')->with('message','readed successfly');
    }

    }

