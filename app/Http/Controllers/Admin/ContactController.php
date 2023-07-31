<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public function viewcontact()
    {
        $data =[
            'contacts' => Contact::all()
        ];
        return view('admin.contact', $data);
    }
    public function editcontact($id)
    {
        $data =[
            'contacts' => Contact::find($id)
        ];
        return view('admin.updatecontact', $data);
    }
    public function contactedit(Request $request, $id)
    {   
        $validator = Validator::make($request->only('Phone'), [
            'phone' => 'required|numeric|digits:10',
        ]);
    
        if ($validator->fails()) {
            Alert::warning('Phone number with 10 digits required!');
            return redirect()->back();
        }

        $contact = Contact::find($id);
        $contact->Address = $request->Address;
        $contact->Phone = $request->Phone;
        $contact->email = $request->email;
        $contact->StartingTime = $request->StartingTime;
        $contact->EndingTime = $request->EndingTime;
        $contact->StartingDay = $request->StartingDay;
        $contact->EndingDay = $request->EndingDay;
        $contact->save();
        Alert::success('Contact has been Updated!!');
        return redirect('/admin/contact');
    }
}
