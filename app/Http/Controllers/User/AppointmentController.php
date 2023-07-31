<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use PDF;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentController extends Controller
{
    public function addappointment(Request $request)
    {
        $comp = new Appointment;
        $comp->name=$request->name;
        $comp->email=$request->email;
        $comp->date=$request->date;
        $comp->service=$request->service;
        $comp->message=$request->message;
        $comp->save();
        Alert::warning('Appointment has been booked!');
        return redirect('/download');
    }
    public function download()
    {
        $pdf2 = PDF::loadView('pdf.appoint');
        return $pdf2->download('Appointment.pdf');
    }

    public function viewappointment()
    {
        $data =[
            'appointment' => Appointment::all()
        ];
        return view('admin.appointment', $data);
    }
    
    public function deleteappointment($id)
    {
        $appointment = Appointment::find($id);
        $appointment->delete();
        Alert::warning('Appointment has been Deleted!');
        return redirect()->back();
    }
}
