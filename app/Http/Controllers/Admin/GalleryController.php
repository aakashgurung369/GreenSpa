<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class GalleryController extends Controller
{
    public function viewgallery()
    {
        $data =[
            'gallerys' => Gallery::all()
        ];
        return view('admin.gallery', $data);
    }
    public function addgallery(Request $request)
    {
        /* $validator = Validator::make($request->only('image'), [
            'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
      
        if ($validator->fails()) {
            Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
            return redirect()->back();
        } */
        $Gallery = new Gallery;
        $Gallery->name = $request->name;
        $image=$request->image;
                $img_rand=md5(rand(1000,10000));
                $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                $image->move('Gallery',$imagename);
                $imagenams = $imagename;
                $Gallery->image=$imagenams;
        $slug = Str::slug($request->name);
        $Gallery->slug=$slug;
        $Gallery->save();
        Alert::success('Gallery has been Added!!');
        return redirect('/admin/gallery');
    }
    public function deletegallery($id)
    {
        $pricing = Gallery::find($id);
        $pricing->delete();
        Alert::warning('Pricing has been Deleted!');
        return redirect()->back();
    }
    public function editgallery($id)
    {
        $data =[
            'gallery' => Gallery::find($id)
        ];
        return view('admin.editgallery', $data);
    }

    public function updategallery(Request $request, $id)
    {
    /* $validator = Validator::make($request->only('image'), [
        'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
    ]);

    if ($validator->fails()) {
        Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
        return redirect()->back();
    } */
        $Gallery= Gallery::find($id);
        $Gallery->name = $request->name;
        $image=$request->image;
            if($image)
                {
                    $img_rand=md5(rand(1000,10000));
                    $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                    $image->move('Gallery',$imagename);
                    $imagenams = $imagename;
                    $Gallery->image=$imagenams;
                }
        $slug = Str::slug($request->name);
        $Gallery->slug=$slug;
        $Gallery->save();
        Alert::success('Gallery has been Updated!!');
        return redirect('/admin/gallery');
    }
    public function imagegallery(Request $request, $id)
    {
    /* $validator = Validator::make($request->only('image'), [
        'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
    ]);

    if ($validator->fails()) {
        Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
        return redirect()->back();
    } */
        $Gallery= Gallery::find($id);
        $image=$request->image;
            if($image)
                {
                    $img_rand=md5(rand(1000,10000));
                    $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                    $image->move('Gallery',$imagename);
                    $imagenams = $imagename;
                    $Gallery->image=$imagenams;
                }
        $Gallery->save();
        Alert::success('Image has been Updated!!');
        return redirect('/admin/gallery');
    }

    public function viewallgalleryuser()
    {
        $data =[
            'gallerys' => Gallery::all()
        ];
        return view('User.Gallery', $data);
    }
}
