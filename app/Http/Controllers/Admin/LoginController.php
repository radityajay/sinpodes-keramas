<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\RoleUser;
use App\User;
use Illuminate\Http\Request;
use Auth;

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
        $this->middleware('guest')->except('logout', 'profile');
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

        // return view('admin/auth/login');
    }

    public function login(Request $request)
    {
        $user = RoleUser::where('username', $request->username)
            ->where('is_active', true)
            ->first();

        if (is_null($user)) {
            return redirect()
                ->back()
                ->with('error', trans('auth.not_found'));
        } else {
            if ($user->is_active == 1) {
                if (Auth::attempt([
                    'username' => $request->username,
                    'password' => $request->password
                ])) {
                    return redirect()->route('admin.dashboard');
                } else {
                    return redirect()
                        ->back()
                        ->with('error', trans('auth.not_found'));
                }
            } else {
                return redirect()
                    ->back()
                    ->with('error', trans('auth.not_found'));
            }
        }

        return back()->withInput($request->only('username', 'remember'));
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->logout();
            // request()->session()->forget('pos_session_id');
            return redirect()->route('admin.login');
        }
    }
}
