<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

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

        $file = $request->image;
        $name = rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('patient_profile/'),$name);
        $patient->name = $request->name;
        $patient->dob = $request->dob;
        $patient->gender = $request->gender;
        $patient->blood_group = $request->blood_group;
        $patient->email = $request->email;
        $patient->phone_no = $request->phone_no;
        $patient->address = $request->address;
        $patient->image = $name;
        $patient->save();
        return redirect('/');
    }
}
