<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Patient;

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
        return view('patient.register');
    }
}
