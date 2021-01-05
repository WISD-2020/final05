<?php

namespace App\Http\Responses;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;

class RegisterResponse implements RegisterResponseContract
{
    public function toResponse($request)
    {
        // below is the existing response
        // replace this with your own code

        $status=$request->status;

        if ($status=="1")
            return redirect()->route('admin.doctors.index');
        elseif ($status=="0")
            return redirect()->route('dashboard');

//        return $request->wantsJson()
//            ? new JsonResponse('', 201)
//            : redirect(config('fortify.home'));

    }
}
