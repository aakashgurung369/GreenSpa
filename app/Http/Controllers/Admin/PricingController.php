<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pricing;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class PricingController extends Controller
{
    public function viewpricing()
    {
        return view('admin.pricing');
    }
    public function addpricing(Request $request)
    {
        /* $validator = Validator::make($request->only('image'), [
            'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
        ]);
      
        if ($validator->fails()) {
            Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
            return redirect()->back();
        } */
        $pricing = new Pricing;
        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $image=$request->image;
                $img_rand=md5(rand(1000,10000));
                $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                $image->move('Pricing',$imagename);
                $imagenams = $imagename;
                $pricing->image=$imagenams;
        $pricing->service = $request->service;
        $pricing->price = $request->price;
        $slug = Str::slug($request->service);
        $pricing->slug=$slug;
        $pricing->save();
        Alert::success('Pricing has been Added!!');
        return redirect('/admin/allpricing');
    }
    public function viewallpricing()
    {
        $data =[
            'pricings' => Pricing::all()
        ];
        return view('admin.allpricing', $data);
    }

    public function deletepricing($id)
    {
        $pricing = Pricing::find($id);
        $pricing->delete();
        Alert::warning('Pricing has been Deleted!');
        return redirect()->back();
    }
    public function editpricing($id)
    {
        $data =[
            'pricings' => Pricing::find($id)
        ];
        return view('admin.editpricing', $data);
    }

    public function updatepricing(Request $request, $id)
    {
    /* $validator = Validator::make($request->only('image'), [
        'image' => 'required|image|mimes:jpg,png,jpeg,svg|max:2048',
    ]);

    if ($validator->fails()) {
        Alert::warning('Image must be of format jpg,png,jpeg,svg with maximum size 2Mb!','Please Try Again!!');
        return redirect()->back();
    } */
        $pricing= Pricing::find($id);
        $pricing->name = $request->name;
        $pricing->description = $request->description;
        $image=$request->image;
            if($image)
                {
                    $img_rand=md5(rand(1000,10000));
                    $imagename=$img_rand.'.'.$image->getClientOriginalExtension();
                    $image->move('Pricing',$imagename);
                    $imagenams = $imagename;
                    $pricing->image=$imagenams;
                }
        $pricing->service = $request->service;
        $pricing->price = $request->price;
        $slug = Str::slug($request->service);
        $pricing->slug=$slug;
        $pricing->save();
        Alert::success('Pricing has been Updated!!');
        return redirect('/admin/allpricing');
    }
}
