<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Outpatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TreatmentController extends Controller
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
        $outpatients = Outpatient::orderBy('date', 'DESC')->get();
        //有掛號的病人姓名
        $patient_name = DB::table('appointments')
            ->join('users', 'appointments.user_id', '=', 'users.id')
            ->select('users.name','appointments.user_id')
            ->get();
dd($patient_name[]->user_id);
        $data = [
            'outpatients'=>$outpatients,
            'users' => $users,
            'auth_id' => $auth_id,
            'patient_name' => $patient_name,
        ];

        return view('doctors.treatments.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function edit($user_id)
    {
        dd($user_id);

        $data = [
            'user_id' => $user_id,
        ];
        return view('doctors.treatments.edit', $data);
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
        $doctor->update($request->all());

        return redirect()->route('admin.doctors.index');
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
