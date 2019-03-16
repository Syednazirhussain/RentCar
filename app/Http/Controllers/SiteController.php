<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Vendor;
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
}
