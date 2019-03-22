<?php

namespace App\Http\Controllers;

use App\Models\Admin\GeneralInformation;
use App\Models\Admin\Packages;
use App\Models\Admin\Pages;
use App\Models\Admin\Services;
use App\Models\Admin\VehicleSpecification;
use App\Models\Admin\VehicleType;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Vendor;
use Illuminate\Http\Request;
use Mail;
use Session;

class SiteController extends Controller
{
    public function __construct() {
        $this->middleware('customer.auth')->only('booking_attempt');
    }

    public function index() {
    	
    	$vehicles = Vehicles::all();
    	$vendors = Vendor::all();
    	$packages = Packages::all();
    	$vehicleTypes = VehicleType::all();
    	$generalInformation = GeneralInformation::where('code', 'site-setting')->first();

    	return view('index', compact('generalInformation', 'vehicleTypes', 'vehicles'));
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

        $data = $request->except('_token');
        $generalInformation = GeneralInformation::where('code', 'site-setting')->first();

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('syednazir13@gmail.com')->subject($data['subject']);
        });
        
        Session::Flash('msg.success', 'Your message has been sent to administrator.');

        return redirect()->back();
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
        $generalInformation     = GeneralInformation::where('code', 'site-setting')->first();
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
            'pickup_time'       => 'required|time',
            'pickup_address'    => 'required|String',
            'dropoff_address'   => 'required|String',
        ]);

        
        dd($request->all());
    }

    
}
