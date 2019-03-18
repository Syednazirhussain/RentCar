<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Models\Admin\Pages;
use App\Models\Admin\Vendor;
use App\Models\Admin\Services;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Packages;
use App\Models\Admin\VehicleType;
use App\Models\Admin\GeneralInformation;

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

    
}
