<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request) {
        // Validate input fields
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
            'type' => 'required|in:patient,doctor', // Ensure type is either patient or doctor
        ]);
    
        // Determine user type
        if ($request->type === 'patient') {
            $user = Patient::where('email', $request->email)->first();
        } else {
            $user = Doctor::where('email', $request->email)->first();
        }
    
        // Verify user exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // Store session data
            Session::put('user_id', $user->id);
            Session::put('user_name', $user->name);
            Session::put('user_type', $request->type);
    
            // Redirect to appropriate dashboard
            if ($request->type === 'patient') {
                return redirect()->route('patient.index')->with('success', 'Login successful');
            } else {
                return redirect()->route('doctor.index')->with('success', 'Login successful');
            }
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    }   
}
