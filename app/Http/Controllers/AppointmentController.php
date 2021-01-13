<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Outpatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auth_id=auth()->user()->id;
        $users = User::Get();
        //登入者的掛號資料
        $appointments = Appointment::where('user_id', '=', $auth_id)->orderBy('date', 'DESC')->get();
        //病人掛哪一個掛號的醫師名稱
        $doctor_name = DB::table('appointments')
            ->join('outpatients', 'appointments.outpatient_id', '=', 'outpatients.id')
            ->join('users', 'outpatients.user_id', '=', 'users.id')
            ->select('users.name','outpatients.id')
            ->get();

        $data = [
            'appointments' => $appointments,
            'users' => $users,
            'auth_id' => $auth_id,
            'doctor_name' => $doctor_name,
        ];

        return view('patients.appointments.records.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outpatients = Outpatient::get();
        $users = User::Get();

        $tests = DB::table('outpatients')
            ->join('users', 'outpatients.user_id', '=', 'users.id')
            ->select('users.name', 'outpatients.id')
            ->orderBy('outpatients.id', 'asc')
            ->get();


        $auth_id=auth()->user()->id;
        //$announcement = Announcement::where('user_id', $request->user()->id)->get();
        $data = [
            'outpatients' => $outpatients,
            'users' => $users,
            'auth_id' => $auth_id,
            'tests' => $tests,
        ];

        return view('patients.appointments.show', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Outpatient $appointment)
    {
        $auth_id=auth()->user()->id;
        $data = [
            'outpatient_id' => $appointment->id,
            'user_id' => $auth_id,
            'date' => $appointment->date,
            'period' => $appointment->period,
            'status' => 5,
        ];

        Appointment::create($data);

        return redirect()->route('patients.appointments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
