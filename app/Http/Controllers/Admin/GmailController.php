<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Mail;
use RealRashid\SweetAlert\Facades\Alert;

class GmailController extends Controller
{
    public function replyemail($id)
    {
        $data =[
            'appointment' => Appointment::find($id)
        ];
        return view('admin.gmail.form', $data);
    }
    public function sendemail(Request $request)
    {
        $data = ['body'=>$request->body];
        $user['to'] = $request->email;
        $subject = $request->subject;
        Mail::send('mail', $data, function($messages) use ($user, $subject){
            $messages->to($user['to']);
            $messages->subject($subject);
        });
        Alert::success('Email has been sent!');
        return redirect('/admin/appointment');
    }
}