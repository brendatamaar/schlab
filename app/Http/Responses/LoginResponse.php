<?php

namespace App\Http\Responses;

use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    public function toResponse($request)
    {

        $role = Auth::user()->profile_type;

        if ($role == 'App\Models\Admin') {
            return redirect('/admin/dashboard');
        } else if ($role == 'App\Models\Teachers') {
            return redirect('/teacher/home');
        } else if ($role == 'App\Models\Students') {
            return redirect('/student/page-home');
        } else if ($role == 'App\Models\Parent') {
            return redirect('/parent/dashboard');
        } else {
            return redirect('/parent/dashboard');
        }

        return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->intended(config('fortify.home'));
    }
}
