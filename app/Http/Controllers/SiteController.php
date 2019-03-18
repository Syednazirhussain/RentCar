<?php

namespace App\Http\Controllers;

use App\Models\Admin\GeneralInformation;
use App\Models\Admin\Packages;
use App\Models\Admin\Pages;
use App\Models\Admin\Services;
use App\Models\Admin\VehicleType;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Vendor;
use Illuminate\Http\Request;
use Mail;
use Session;

class SiteController extends Controller
{
    public function index() {
    	
    	$vehicles = Vehicles::all();
    	$vendors = Vendor::all();
    	$packages = Packages::all();
    	$vehicleTypes = VehicleType::all();
    	$generalInformation = GeneralInformation::where('code', 'site-setting')->first();

    	return view('index', compact('generalInformation', 'vehicleTypes', 'vendors', 'packages', 'vehicles'));
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

    
}
