<?php

use App\Http\Controllers\AdminDoctorController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\OutpatientController;
use App\Http\Controllers\TreatmentController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/master', function () {
    return view('layouts.master');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::prefix('admin')->group(function () {
    Route::get('/doctors', [AdminDoctorController::class, 'index'])->name('admin.doctors.index');
    Route::get('/doctors/create', [AdminDoctorController::class, 'create'])->name('admin.doctors.create');
    Route::post('/doctors', [AdminDoctorController::class, 'store'])->name('admin.doctors.store');
    Route::get('/doctors/{doctor}/edit', [AdminDoctorController::class, 'edit'])->name('admin.doctors.edit');
    Route::patch('/doctors/{doctor}', [AdminDoctorController::class, 'update'])->name('admin.doctors.update');
});


Route::prefix('doctors')->group(function () {
    Route::get('/announcements', [AnnouncementController::class, 'index'])->name('doctors.announcements.index');
    Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('doctors.announcements.create');
    Route::post('/announcements', [AnnouncementController::class, 'store'])->name('doctors.announcements.store');
    Route::get('/announcements/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('doctors.announcements.edit');
    Route::patch('/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('doctors.announcements.update');
    Route::delete('/announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('doctors.announcements.destroy');
});


Route::prefix('doctors')->group(function () {
    Route::get('/outpatients', [OutpatientController::class, 'index'])->name('doctors.outpatients.index');
    Route::get('/outpatients/create', [OutpatientController::class, 'create'])->name('doctors.outpatients.create');
    Route::post('outpatients', [OutpatientController::class, 'store'])->name('doctors.outpatients.store');
    Route::get('/outpatients/edit', [OutpatientController::class, 'edit'])->name('doctors.outpatients.edit');
    Route::patch('/outpatients/{outpatient}', [OutpatientController::class, 'update'])->name('doctors.outpatients.update');
});

Route::prefix('doctors')->group(function () {
    Route::get('/treatments', [TreatmentController::class, 'index'])->name('doctors.treatments.index');
    Route::get('/treatments/create', [TreatmentController::class, 'create'])->name('doctors.treatments.create');
    Route::post('treatments', [TreatmentController::class, 'store'])->name('doctors.treatments.store');
    Route::get('/treatments/edit', [TreatmentController::class, 'edit'])->name('doctors.treatments.edit');
    Route::patch('/treatments/{user_id}', [TreatmentController::class, 'update'])->name('doctors.treatments.update');
});


Route::prefix('/patients/appointments')->group(function () {
    Route::get('/records', [AppointmentController::class, 'index'])->name('patients.appointments.record');
    Route::get('/create', [AppointmentController::class, 'create'])->name('patients.appointments.create');
    Route::post('/check/{appointment}', [AppointmentController::class, 'store'])->name('patients.appointments.store');
    Route::get('/edit/{appointment}', [AppointmentController::class, 'edit'])->name('patients.appointments.edit');
    Route::patch('/{appointment}', [AppointmentController::class, 'update'])->name('patients.appointments.update');
});
