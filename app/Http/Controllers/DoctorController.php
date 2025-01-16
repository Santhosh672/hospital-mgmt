<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index() {
        return view('doctor.profile');
    }

    public function create() {
        return view('doctor.register');
    }

    public function store() {
        //code to store data to the database to be written
    }
}
