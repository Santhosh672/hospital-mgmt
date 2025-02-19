<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        return view('doctor.profile');
    }

    public function create() {
        return view('doctor.register');
    }

    public function store(Request $request) {
        $doctor = new Doctor;

        $file = $request->image;
        $name = rand().'.'.$file->getClientOriginalExtension();
        $file->move(public_path(path: 'patient_profile/'),$name);
        $doctor->name = $request->name;
        $doctor->dob = $request->dob;
        $doctor->gender = $request->gender;
        $doctor->specialization = $request->specialization;
        $doctor->experience= $request->experience;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->phone_no = $request->phone_no;
        $doctor->address = $request->address;
        $doctor->image = $name;

        $doctor->save(); 
        return redirect('/');
    }

    public function edit($id) {
        $doctor = Doctor::find($id);
        return view('doctor.edit', compact('doctor'));
    }

    public function update($id, Request $request){
        $doctor = Doctor::find($id);

        $doctor->name = $request->name;
        $doctor->dob = $request->dob;
        $doctor->gender = $request->gender;
        $doctor->specialization = $request->specialization;
        $doctor->experience= $request->experience;
        $doctor->email = $request->email;
        $doctor->password = Hash::make($request->password);
        $doctor->phone_no = $request->phone_no;
        $doctor->address = $request->address;

        $doctor->save();
        return redirect('login');
    }

    public function show() {
        return view('doctor.my-appointment');
    }

    public function makeschedule() {
        return view('doctor.schedule');
    }
}
