<?php

use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AppointmentController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('login', function () {
    return view('login');
});
Route::get('/appointments/book', [AppointmentController::class, 'create'])->name('appointments.book');
Route::post('/appointments/store', [AppointmentController::class, 'store'])->name('appointments.store');
Route::get('/doctor/myappointments', [AppointmentController::class, 'doctorAppointments'])->name('appointments.doctor');
Route::post('/appointments/{id}/update-status', [AppointmentController::class, 'updateStatus'])->name('appointments.updateStatus');

Route::resource('doctor', DoctorController::class);
Route::resource('patient',PatientController::class);
Route::post('/login', [AuthController::class, 'login'])->name('user.login');
Route::get('/profile', [AuthController::class, 'profile'])->name('user.profile');
Route::get('patient/book-appointment', [PatientController::class, 'bookapp'])->name('patient.bookapp');
Route::get('doctor/my-appointment', [DoctorController::class, 'myapps'])->name('doctor.myapps');
Route::get('doctor/schedule', [DoctorController::class, 'makeschedule'])->name('doctor.makeschedule');