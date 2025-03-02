<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function index() {
        return view('patient.profile');
    }
    
    public function create() {
        return view('patient.register');
    }

    //code for patient registration page needed here
    public function store(Request $request) {
        $patient = new Patient;

        $patient->name = $request->name;
        $patient->dob = $request->dob;
        $patient->gender = $request->gender;
        $patient->blood_group = $request->blood_group;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->phone_no = $request->phone_no;
        $patient->address = $request->address;
        $patient->save();

        return redirect('/');
    }

    public function edit($id){
        $patient = Patient::find($id);
        return view('patient.edit', compact('patient'));
    }

    public function update($id, Request $request){
        $patient = Patient::find($id);
        $patient->name = $request->name;
        $patient->dob = $request->dob;
        $patient->gender = $request->gender;
        $patient->blood_group = $request->blood_group;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->phone_no = $request->phone_no;
        $patient->address = $request->address;
        $patient->save();

        return redirect('login');
    }

    public function show() {
        $userId = Session::get('user_id');
        $doctor = Doctor::get();
        $user = Patient::find($userId);
        return view('patient.book-appointment', compact('doctor', 'user'));
        //return dd($user);
    }

    public function myAppointments()
    {
        $userId = Session::get('user_id');
        $user = Patient::find($userId);
        $appointments = Appointment::where('patient_id', $user->id)->get();
        $doctorIds = $appointments->pluck('doctor_id')->unique();
        $doctors = Doctor::whereIn('id', $doctorIds)->get()->keyBy('id');

        return view('patient.appointments', compact('user', 'appointments', 'doctors'));
    }

}