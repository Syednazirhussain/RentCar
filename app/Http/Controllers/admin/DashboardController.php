<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Customers;
use App\Models\Admin\GeneralInformation;
use App\Models\Admin\Booking;
use App\Models\Admin\Packages;
use App\Models\Admin\VehicleType;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Vendor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {

    	$generalInformation = GeneralInformation::where('code', 'site-setting')->first();
    	$vendors = Vendor::all();
    	$vehicleType = VehicleType::all();
    	$vehicles = Vehicles::all();
    	$packages = Packages::all();
    	$customers = Customers::all();
        $bookings = Booking::all();

    	return view('admin.index', compact('vehicles', 'packages', 'vehicleType', 'vendors', 'generalInformation', 'customers', 'bookings'));
    }

}
