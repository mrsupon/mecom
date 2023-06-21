<?php

namespace App\Http\Controllers\Dashboards;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller as BaseClass;

class Controller extends BaseClass
{
    public function index()
    {
        if(Auth::user()->role === 'admin')
            // Redirect::route('dashboards.admin.index');
            return view('dashboards.admin.index');
        elseif(Auth::user()->role === 'vendor')
            //return Redirect::route('dashboards.vendor.index');
            return view('dashboards.vendor.index');
        else
            //$role === User
            return view('dashboard');
    }
    public function login()
    {
        return view('dashboards.login');
    }
    public function register()
    {
        return view('dashboards.register');
    }
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return Redirect::route('home');
    }
}
