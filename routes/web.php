<?php

use App\Http\Controllers\AdminDoctorController;
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
