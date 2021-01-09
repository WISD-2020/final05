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
        return view('doctors.outpatients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Outpatient::create($request->all());
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
