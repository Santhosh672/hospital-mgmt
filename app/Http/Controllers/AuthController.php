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
    
            return redirect()->route('user.profile')->with('success', 'Login successful');

            // // Redirect to appropriate dashboard
            // if ($request->type === 'patient') {
            //     return redirect()->route('patient.index')->with('success', 'Login successful');
            // } else {
            //     return redirect()->route('doctor.index')->with('success', 'Login successful');
            // }
        } else {
            return back()->with('error', 'Invalid email or password');
        }
    } 
    
    public function profile() {
        // Check if user is logged in
        if (!Session::has('user_id') || !Session::has('user_type')) {
            return redirect()->route('login')->with('error', 'Please log in first.');
        }
    
        // Get session values
        $userType = Session::get('user_type');
        $userId = Session::get('user_id');
    
        // Fetch user based on type
        if ($userType === 'patient') {
            $user = Patient::find($userId);
            $view = 'patient.profile'; // Blade file for patients
        } elseif ($userType === 'doctor') {
            $user = Doctor::find($userId);
            $view = 'doctor.profile'; // Blade file for doctors
        } else {
            return redirect()->route('login')->with('error', 'Invalid user type.');
        }
    
        // Check if user exists
        if (!$user) {
            return redirect()->route('login')->with('error', 'User not found.');
        }
        // Redirect to respective Blade template
        return view($view, compact('user'));
    }
    
    
}
