<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
  public function viewprofile()
  {
    $data=[
        'profiles'=> Profile::all()
    ];
    return view('admin.profile',$data);
  }
  public function editprofile($id)
  {
    $data=[
      'profile'=> Profile::find($id)
  ];
  return view('admin.updateprofile',$data);
  }
  public function profileedit(Request $request, $id)
  {
    $validator = Validator::make($request->only('image'), [
      'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
  ]);

  if ($validator->fails()) {
      Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
      return redirect()->back();
  }
    $profile= profile::find($id);
    $profile->youtube=$request->youtube;
    $profile->insta=$request->insta;
    $profile->facebook=$request->facebook;
    $profile->tiktok=$request->tiktok;
    $image=$request->image;
        if($image)
            {
                $img_rand=md5(rand(1000,10000));
                $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                $image->move('Profile',$imagename);
                $imagenams = $imagename;
                $profile->image=$imagenams;
            }

    $profile->save();
    Alert::success('profile has been Updated!!');
    return redirect('/admin/profile');

  }
}

