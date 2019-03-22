<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class CustomerLoginController extends Controller
{
    public function login(Request $request) {

		$request->session()->put('booking_url', URL::previous());
    	return view('login');
    	
    }

    public function register() {
    	return view('register');
    }

    public function register_attempt(Request $request) {

    	dd($request->all());

    	$request->validate([
	        'f_name'            => 'required|min:3|max:45|String',
	        'l_name'            => 'required|min:3|max:45|String',
	        'phone'             => 'required|digits:11',
	        'nic'               => 'required|digits:13',
	        'email'             => 'required|email|unique:customers,email',
	        'password'			=> 'required|String|min:6'
    	],
    	[
    		'f_name.required'	=> 'Please enter your first name',
    		'l_name.required'	=> 'Please enter your last name',
    		'phone.required'	=> 'Please enter your phone number',
    		'nic.required'	=> 'Please enter your cnic number',
    		'email.required'	=> 'Please enter your email',
    		'password.required'	=> 'Please enter your password',
    	]);

    	if ($request->has('g-recaptcha-response') && !empty($request->has('g-recaptcha-response'))) {

			$captcha_response 	= $request->input('g-recaptcha-response');
			$secret 			= config('rentcar.RECAPTCHA.SECRET_KEY');
			$captcha_verify_url = config('rentcar.RECAPTCHA.VERIFY_BASE_URL');

			$url =	$captcha_verify_url.'secret='.$secret.'&response='.$captcha_response;

			$verifyResponse = file_get_contents($url);
			$responseData = json_decode($verifyResponse);
			if ($responseData->success) {

				Customers::updateOrCreate(
				    ['departure' => 'Oakland', 'destination' => 'San Diego'],
				    ['price' => $request->input('email')]
				);


			} else {
			    $error = ['Robot verification failed, please try again.'];
			    return redirect()->back()->withErrors($error);
			}
		} else {
			$error = ['Please click on the reCAPTCHA box.'];
			return redirect()->back()->withErrors($error);
		}

    }
}
