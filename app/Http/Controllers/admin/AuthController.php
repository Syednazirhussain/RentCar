<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Flash;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
	public function login() {
		return view('admin.auth.index');
	}

	public function login_attempt(Request $request) {
		if (Auth::guard('admin')->attempt(['email'	=> $request->input('email'), 'password'	=> $request->input('password')])) {
			return redirect()->route('admin.dashboard');
		} else {
			Session::Flash('msg.error', 'Invalid Credentials');
			return redirect()->back()->withInput();
		}
	}

	public function logout() {
		Auth::guard('admin')->logout();
		return redirect()->route('admin.login');
	}
}
