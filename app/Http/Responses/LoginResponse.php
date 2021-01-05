<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        // below is the existing response
        // replace this with your own code
        // the user can be located with Auth facade

        $status=Auth::user()->status;

        if ($status=="2")
            return "<script language='JavaScript'>alert('此帳號已停用！！');location.href='/';</script>";
        elseif ($status=="1")
            return redirect()->route('doctors.edit');
        elseif ($status=="3")
            return redirect()->route('admin.doctors.index');
        elseif ($status=="0")
            return redirect()->route('dashboard');


    }

}
