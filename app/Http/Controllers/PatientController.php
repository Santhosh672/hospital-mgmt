<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Patient;

class PatientController extends Controller
{
    //for login page
    public function login() {
        return view('login');
    }

    //code for patient registration page needed here
    public function store(Request $request) {
        return view('patient.register');
    }
}
