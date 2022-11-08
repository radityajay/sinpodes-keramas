<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        } else {
            return view('admin/auth/login');
        }
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ], [
            'required' => ':attribute tidak boleh kosong!'
        ]);

        if (User::where('username', $request->username)->exists()) {
            if (Auth::guard('admin')->attempt([
                'username' => $request->username,
                'password' => $request->password
            ], $request->get('remember'))) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()
                    ->back()
                    ->with('error', 'Kata sandi salah');
            }
        } else {
            return redirect()
                ->back()
                ->with('error', 'Username tidak ditemukan');
        }
    }

    public function logout()
    {
        if (Auth::guard('admin')->user()) {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }
    }
}
