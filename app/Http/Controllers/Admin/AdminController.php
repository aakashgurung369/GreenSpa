<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Appointment;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
  public function viewhome()
  {
    $data=[
        'homes'=> Home::all()
    ];
    return view('admin.home',$data);
  }
  public function edithome($id)
  {
    $data=[
      'homes'=> Home::find($id)
  ];
  return view('admin.updatehome',$data);
  }
  public function homeedit(Request $request, $id)
  {
    $validator = Validator::make($request->only('image'), [
      'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
  ]);

  if ($validator->fails()) {
      Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
      return redirect()->back();
  }
    $home= Home::find($id);
    $home->heading=$request->heading;
    $home->description=$request->description;
    $image=$request->image;
        if($image)
            {
                $img_rand=md5(rand(1000,10000));
                $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                $image->move('Home',$imagename);
                $imagenams = $imagename;
                $home->image=$imagenams;
            }

    $home->save();
    Alert::success('Home has been Updated!!');
    return redirect('/admin/home');

  }

  public function search(Request $request)
  {
    $search_text=$request->search;
    $appointment=Appointment::where('id','LIKE',"%$search_text%")->orWhere('name','LIKE',"%$search_text%")->orWhere('email','LIKE',"%$search_text%")->orWhere('date','LIKE',"%$search_text%")->orWhere('service','LIKE',"%$search_text%")->orWhere('message','LIKE',"%$search_text%")->get();
    return view('admin.appointment', compact('appointment'));
  }
}

