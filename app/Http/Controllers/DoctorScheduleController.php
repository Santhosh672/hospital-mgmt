<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;

class DoctorScheduleController extends Controller
{
    public function index()
    {
        $doctorId = auth()->user()->id; // Assuming doctors are authenticated users

        $appointments = Appointment::where('doctor_id', $doctorId)->get();

        return view('doctor.schedule', compact('appointments'));
    }
}
