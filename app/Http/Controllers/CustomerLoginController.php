<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customers;
use App\Models\Admin\GeneralInformation;
use App\Models\Admin\Packages;
use App\Repositories\Admin\CustomersRepository;
use Auth;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Session;

class CustomerLoginController extends Controller
{	
	/** @var  CustomersRepository */
    private $customersRepository;

    public function __construct(CustomersRepository $customersRepo)
    {
		$this->middleware('customer.auth')->only('logout');
        $this->customersRepository = $customersRepo;
    }

    public function login(Request $request) {

        $packages = Packages::all();
        $generalInformation = GeneralInformation::where('code', 'site-setting')->first();
    	if( strpos( URL::previous(), 'booking' ) !== false) {
			$request->session()->put('booking_url', URL::previous());
		}

    	return view('login', compact('generalInformation', 'packages'));
    }

    public function login_attempt(Request $request) {
    	$request->validate([
    		'email'		=> 'required|email',
    		'password'	=> 'required|min:6'
    	],
    	[
    		'email.required'	=> 'Please provide your email',
    		'password.required'	=> 'Please provide your password'
    	]);

    	if (Auth::guard('customer')->attempt(['email'	=> $request->input('email'), 'password'	=> $request->input('password')])) {

    		Session::Flash('msg.success', 'Login succeded.');
            
            if ( $request->session()->has('booking_url') ) {
                $booking_url = $request->session()->get('booking_url');
                return redirect($booking_url);
            }

    	} else {
    		Session::Flash('msg.error', 'Invalid credentials');
    	}

    	return redirect()->route('site.index');
    }

    public function logout() {
    	Auth::guard('customer')->logout();
    	return redirect()->route('site.index');
    }

    public function register() {
        $packages = Packages::all();
        $generalInformation = GeneralInformation::where('code', 'site-setting')->first();
    	
        return view('register', compact('generalInformation', 'packages'));
    }

    public function register_attempt(Request $request) {

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

				$input = [
					'f_name'	=> $request->input('f_name'),
					'l_name'	=> $request->input('l_name'),
					'phone'		=> $request->input('phone'),
					'nic'		=> $request->input('nic'),
					'password'	=> bcrypt($request->input('password')),
				];

				$customer = Customers::updateOrCreate(
				    ['email' => $request->input('email')],
				    $input
				);

		        Auth::guard('customer')->login($customer);
		        return redirect()->route('site.index');


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
