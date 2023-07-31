<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function viewservice()
    {
        $data =[
            'services' => Service::all()
        ];
        return view('admin.service', $data);
    }
    public function addservice(Request $request)
    {
        $service = new Service;
        $service->name = $request->name;
        $service->description = $request->description;
        $slug = Str::slug($request->name);
        $service->slug=$slug;
        $service->save();
        Alert::success('Service has been Added!!');
        return redirect()->back();
    }
    public function deleteservice($id)
    {
        $appointment = Service::find($id);
        $appointment->delete();
        Alert::warning('Service has been Deleted!');
        return redirect()->back();
    }
}
