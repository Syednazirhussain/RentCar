<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CustomerLoginController extends Controller
{
    public function login(Request $request) {

		$request->session()->put('booking_url', URL::previous());
    	return view('login');
    	
    }
}
