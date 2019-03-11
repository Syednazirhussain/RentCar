<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Packages;
use App\Models\Admin\Offers;
use App\Models\Admin\Vendor;
use App\Models\Admin\VehicleType;
use App\Models\Admin\GeneralInformation;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index() {

    	$generalInformation = GeneralInformation::where('code', 'site-setting')->first();
    	$vendors = Vendor::all();
    	$vehicleType = VehicleType::all();
    	$vehicles = Vehicles::all();
    	$packages = Packages::all();
    	$offers = Offers::all();

    	return view('admin.index', compact('vehicles', 'packages', 'offers', 'vehicleType', 'vendors', 'generalInformation'));
    }

}
