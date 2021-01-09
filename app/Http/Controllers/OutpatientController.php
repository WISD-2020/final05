<?php

namespace App\Http\Controllers;

use App\Models\Outpatient;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutpatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
        return view('doctors.outpatients.show', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $last=Outpatient::orderBy('id', 'DESC')->first();
        $data=[
            'last' => $last,
        ];

        return view('doctors.outpatients.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a=[
            'user_id' => $request->user_id,
            'period' => $request->morning,
            'date' => $request->date,
        ];

        $b=[
            'user_id' => $request->user_id,
            'period' => $request->afternoon,
            'date' => $request->date,
        ];

        $c=[
            'user_id' => $request->user_id,
            'period' => $request->night,
            'date' => $request->date,
        ];

        auth()->user()->outpatients()->create($a);
        auth()->user()->outpatients()->create($b);
        auth()->user()->outpatients()->create($c);

        return redirect()->route('doctors.outpatients.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $outpatients = Outpatient::Get();
        $users = User::Get();

        $tests = DB::table('outpatients')
            ->join('users', 'outpatients.user_id', '=', 'users.id')
            ->select('users.name', 'outpatients.id', 'outpatients.user_id')
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

        return view('doctors.outpatients.edit', $data);
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
