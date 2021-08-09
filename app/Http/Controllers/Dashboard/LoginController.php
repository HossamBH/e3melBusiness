<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
     /**
     * Destroy an authenticated session.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Laravel\Fortify\Contracts\LogoutResponse
     */
    public function logout()
    {
        auth()->guard('web')->logout();

        return redirect(route('admin.dashboard'));
    }
}
