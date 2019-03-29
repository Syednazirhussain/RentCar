<?php

namespace App\Http\Controllers;

use App\Models\Admin\Booking;
use App\Models\Admin\GeneralInformation;
use App\Models\Admin\Packages;
use App\Models\Admin\Pages;
use App\Models\Admin\Services;
use App\Models\Admin\VehicleSpecification;
use App\Models\Admin\VehicleType;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Vendor;
use App\Traits\DefaultTrait;
use Auth;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Mail;
use Session;

class SiteController extends Controller
{
    use DefaultTrait;

    protected $repository;

    public function __construct() {
        $this->middleware('customer.auth')->only('booking_attempt');
    }

    public function index() {
    	
    	$vehicles = Vehicles::all();
        $packages = Packages::all();
    	$vendors = Vendor::all();
    	$vehicleTypes = VehicleType::all();
    	$generalInformation = $this->getDefaults();


    	return view('index', compact('generalInformation', 'vendors', 'vehicleTypes', 'vehicles'));
    }

    public function service() {
    	$generalInformation = GeneralInformation::where('code', 'site-setting')->first();
    	$services			= Services::all();

    	return view('service', compact('generalInformation', 'services'));
    }

    public function pages($page_code) {
        if (!empty($page_code) && !is_null($page_code)) {
            $page = Pages::where('short_code', $page_code)->first();

            if (empty($page)) {
                Session::Flash('msg.error', 'Page not found');
                return redirect()->back();
            }
            
            $generalInformation = GeneralInformation::where('code', 'site-setting')->first();

            return view('pages', compact('generalInformation', 'page'));
        } 

        return redirect()->back();
    }

    public function contact() {
        $generalInformation = GeneralInformation::where('code', 'site-setting')->first();

        return view('contact', compact('generalInformation'));
    }

    public function contact_request(Request $request) {

        $validate = $request->validate([
            'name'      => 'required',
            'phone'     => 'required|numeric',
            'email'     => 'required|email',
            'subject'   => 'required',
            'messages'   => 'required',
        ]);

        if ($request->has('g-recaptcha-response') && !empty($request->has('g-recaptcha-response'))) {

            $captcha_response   = $request->input('g-recaptcha-response');
            $secret             = config('rentcar.RECAPTCHA.SECRET_KEY');
            $captcha_verify_url = config('rentcar.RECAPTCHA.VERIFY_BASE_URL');

            $url =  $captcha_verify_url.'secret='.$secret.'&response='.$captcha_response;

            $verifyResponse = file_get_contents($url);
            $responseData = json_decode($verifyResponse);
            if ($responseData->success) {

                $data = $request->except('_token');
                $generalInformation = GeneralInformation::where('code', 'site-setting')->first();

                Mail::send('emails.contact', $data, function ($message) use ($data) {
                    $message->to(config('rentcar.FROM_MAIL_ADDRESS'))->subject($data['subject']);
                });
                
                Session::Flash('msg.success', 'Your message has been sent to administrator.');
                return redirect()->back();

            } else {
                $error = ['Robot verification failed, please try again.'];
                return redirect()->back()->withErrors($error);
            }
        } else {
            $error = ['Please click on the reCAPTCHA box.'];
            return redirect()->back()->withErrors($error);
        }
    }

    public function packages() {
        $generalInformation     = GeneralInformation::where('code', 'site-setting')->first();
        $vehicleTypes           = Vendor::all();
        $vendors                = VehicleType::all();
        $packages               = Packages::with([
                                    'vehicle',
                                    'vehicle.vendor',
                                    'vehicle.vehicleType'
                                  ])->paginate(2);

        $data = [
            'vendors'               => $vendors,
            'vehicleTypes'          => $vehicleTypes,
            'packages'              => $packages,
            'generalInformation'    => $generalInformation
        ];

        return view('package', $data);
    }

    public function booking($package_id) {

        $package = Packages::findOrFail($package_id);

        $generalInformation     = $this->getDefaults();
        $package                = Packages::where('id', $package_id)
                                    ->with([
                                        'vehicle',
                                        'vehicle.vendor',
                                        'vehicle.vehicleType',
                                        'vehicle.vehicleHasSpecifications.vehicleSpecification'
                                    ])->first();
        
        $data = [
            'package'              => $package,
            'generalInformation'    => $generalInformation,
        ];

        if (!is_null($package->vehicle->vehicle_images)) {
            $vehicle_images = explode("|", $package->vehicle->vehicle_images);
        }

        $data['images']     = $vehicle_images;

        return view('booking', $data);
    }

    public function booking_attempt(Request $request) {
        $request->validate([
            'booking_date'      => 'required|date',
            'package_id'        => 'required|integer',
            'pickup_time'       => 'required',
            'pickup_address'    => 'required|String',
            'dropoff_address'   => 'required|String',
        ]);

        $customer_id = Auth::guard('customer')->user()->id;

        $check_input = [
            'customer_id'   => $customer_id,
            'package_id'    => $request->input('package_id'),
            'booking_date'  => $request->input('booking_date')
        ];

        $input = [
            'pickup_time'       => $request->input('pickup_time'),
            'dropoff_time'      => $request->input('dropoff_time'),
            'pickup_address'    => $request->input('pickup_address'),
            'dropoff_address'   => $request->input('dropoff_address')
        ];

        $booking = Booking::updateOrCreate($check_input, $input);

        if (!empty($booking)) {

            $name = Auth::guard('customer')->user()->f_name." ".Auth::guard('customer')->user()->l_name;
            $package_id = $request->input('package_id');

            $data = [
                'name'              => $name,
                'package'           => Packages::findOrFail($package_id)->name,
                'email'             => Auth::guard('customer')->user()->email,
                'phone'             => Auth::guard('customer')->user()->phone,
                'pickup_time'       => $booking->pickup_time,
                'pickup_address'    => $booking->pickup_address,
                'dropoff_address'   => $booking->dropoff_address
            ];

            Mail::send('emails.booking', $data, function ($message) use ($data) {
                $message->to(config('rentcar.FROM_MAIL_ADDRESS'))->subject(config('rentcar.BOOKING.SUBJECT'));
            });

            Session::Flash('msg.success', 'Your details were successfully delieved.!');

        } else {
            Session::Flash('msg.error', 'There is some problem while creating booking.');
        }

        return redirect()->back();
    }

    public function cars_search(Request $request) {

        $vehicle        = $request->input('vehicle');
        $vehicle_type   = $request->input('vehicle_type');
        $model          = $request->input('model');

        //dd($vehicle." ".$vehicle_type." ".$model);

        if ($vehicle == 0 && $vehicle_type == 0 && $model == 0) {
            $vehicles = Vehicles::paginate(4);
        } else if ($vehicle == 0 && $vehicle_type == 0 && $model != 0) {
            $vehicles = Vehicles::where('model', $model)
                                ->paginate(4);
        } else if ($vehicle == 0 && $vehicle_type != 0 && $model == 0) {
            $vehicles = Vehicles::where('vehicle_type_id', $vehicle_type)
                                ->paginate(4);
        } else if ($vehicle == 0 && $vehicle_type != 0 && $model != 0) {
            $vehicles = Vehicles::where('vehicle_type_id', $vehicle_type)
                                ->where('model', $model)
                                ->paginate(4);
        } else if ($vehicle != 0 && $vehicle_type == 0 && $model == 0) {
            $vehicles = Vehicles::where('id', $vehicle)
                                ->paginate(4);
        } else if ($vehicle != 0 && $vehicle_type == 0 && $model != 0) {
            $vehicles = Vehicles::where('id', $vehicle)
                                ->where('model', $model)
                                ->paginate(4);
        } else if ($vehicle != 0 && $vehicle_type != 0 && $model == 0) {
            $vehicles = Vehicles::where('id', $vehicle)
                                ->where('vehicle_type_id', $vehicle_type)
                                ->paginate(4);
        } else if ($vehicle != 0 && $vehicle_type != 0 && $model != 0) {
            $vehicles = Vehicles::where('id', $vehicle)
                                ->where('model', $model)
                                ->where('vehicle_type_id', $vehicle_type)
                                ->paginate(4);
        }

        $vendors = Vendor::all();
        $allVehicles = Vehicles::all(); 
        $generalInformation = $this->getDefaults();

        return view('search', compact('allVehicles', 'vehicles', 'generalInformation', 'vendors'));
    }

    public function car_details($vehicle_id) {
        $generalInformation = $this->getDefaults();

        $vehicle = Vehicles::where('id', $vehicle_id)
                            ->with([
                                'vendor',
                                'vehicleType',
                                'vehicleHasSpecifications.vehicleSpecification'
                            ])->first();

        $data = [
            'vehicle'              => $vehicle,
            'generalInformation'    => $generalInformation,
        ];

        if (!is_null($vehicle->vehicle_images)) {
            $vehicle_images = explode("|", $vehicle->vehicle_images);
        }
        
        $data['images']     = $vehicle_images;

        return view('vehicle_booking', $data);
    }


    
}
