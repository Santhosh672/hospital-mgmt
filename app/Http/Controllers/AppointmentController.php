<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class AppointmentController extends Controller
{
    // Show appointment booking form
    public function create()
    {
        $doctors = User::where('role', 'doctor')->get(); // Assuming you store doctor roles
        return view('appointments.book', compact('doctors'));
    }

    public function store(Request $request)
    {
        $appointment = new Appointment();

        $appointment->doctor_id = $request->doctor_id;
        $appointment->patient_id = $request->patient_id;
        $appointment->appointment_date = $request->appointment_date;
        $appointment->status = 'Pending'; // Default status
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment request sent successfully!');
    }

    // Show appointments for doctors
    public function doctorAppointments()
    {
        $userId = Session::get('user_id');
        $user = Doctor::find($userId);

        // Get all appointments for the doctor
        $appointments = Appointment::where('doctor_id', $user->id)->get();

        // Get all patient IDs from these appointments
        $patientIds = $appointments->pluck('patient_id')->unique();

        // Retrieve all patient records matching the patient IDs
        $patients = Patient::whereIn('id', $patientIds)->get()->keyBy('id'); // Key by 'id' for easy lookup

        return view('doctor.appointments', compact('user', 'appointments', 'patients'));
    }


    // Update appointment status (approve/reject)
    public function updateStatus(Request $request, $id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->status = $request->status;
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment status updated successfully!');
    }
}
