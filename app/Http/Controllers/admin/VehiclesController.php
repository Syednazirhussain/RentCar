<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateVehiclesRequest;
use App\Http\Requests\Admin\UpdateVehiclesRequest;
use App\Repositories\Admin\VehiclesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Models\Admin\Vehicles;
use App\Models\Admin\Vendor;
use App\Models\Admin\VehicleType;
use App\Models\Admin\VehicleSpecification;
use App\Models\Admin\VehicleHasSpecification;
use Illuminate\Support\Facades\Storage;
use Response;
use Session;



class VehiclesController extends Controller
{
    /** @var  VehiclesRepository */
    private $vehiclesRepository;

    public function __construct(VehiclesRepository $vehiclesRepo)
    {
        $this->vehiclesRepository = $vehiclesRepo;
    }

    /**
     * Display a listing of the Vehicles.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $vehicles = Vehicles::with([
            'vendor',
            'vehicleType'
        ])->get();

        return view('admin.vehicles.index')
            ->with('vehicles', $vehicles);
    }

    /**
     * Show the form for creating a new Vehicles.
     *
     * @return Response
     */
    public function create()
    {
        $vendors = VehicleType::all();
        $vehicleType = Vendor::all();   
        $vehicleSpecification = VehicleSpecification::all();

        $data = [
            'vendors'               => $vendors,
            'vehicleTypes'          => $vehicleType,
            'vehicleSpecifications'  => $vehicleSpecification
        ];

        return view('admin.vehicles.create', $data);
    }

    /**
     * Store a newly created Vehicles in storage.
     *
     * @param CreateVehiclesRequest $request
     *
     * @return Response
     */
    public function store(CreateVehiclesRequest $request)
    {
        if ($this->vehiclesRepository->create($request)) {
            Session::Flash('msg.success', 'Vehicles saved successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicles were not saved.'); 
        }

        return redirect(route('admin.vehicles.index'));
    }

    /**
     * Display the specified Vehicles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicles = $this->vehiclesRepository->findWithoutFail($id);

        if (empty($vehicles)) {
            Session::Flash('msg.error', 'Vehicles not found');

            return redirect(route('admin.vehicles.index'));
        }

        return view('admin.vehicles.show')->with('vehicles', $vehicles);
    }

    public function specificationRemove(Request $request) {
        if ($request->input('vehicle_id') && $request->input('id')) {
            $result = VehicleHasSpecification::where('vehicle_id', $request->input('vehicle_id'))
                                    ->where('vehicle_specification_id', $request->input('id'))->delete();
            if ($result) {
                return response()->json([
                    'status'    => 'success',
                    'code'      =>  200,
                    'message'   => 'Specification removed successfully.'
                ]);
            } else {
                return response()->json([
                    'status'    => 'fail',
                    'code'      =>  401,
                    'message'   => 'Specification were not removed.'
                ]);
            }
        } else {
            return response()->json([
                'status'    => 'fail',
                'code'      =>  404,
                'message'   => 'Specification not found'
            ]);
        }
    }

    /**
     * Show the form for editing the specified Vehicles.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicles = Vehicles::findOrFail($id);
        
        if (empty($vehicles)) {
            Session::Flash('msg.error', 'Vehicles not found');

            return redirect(route('admin.vehicles.index'));
        }

        $vendors = VehicleType::all();
        $vehicleType = Vendor::all();
        $vehicleSpecification = VehicleSpecification::all();
        $vehicleHasSpecifications = VehicleHasSpecification::where('vehicle_id', $id)->get();

        $imagesFiles = explode("|", $vehicles->vehicle_images);

        if(count($imagesFiles) > 0)
        {
            $images = [];

            $url = asset('storage/vehicles');
            $url2 = public_path()."/storage/vehicles";

            $i = 0;
            foreach ($imagesFiles as $file) 
            {
                $images[$i]['name'] = $file;
                $images[$i]['file'] = $url.'/'.$file;
                $images[$i]['size'] = Storage::size('public/vehicles/'.$file);
                $images[$i]['type'] = mime_content_type($url2.'/'.$file);
                $i++;
            }

        }

        $data = [
            'vehicles'                  => $vehicles,
            'vendors'                   => $vendors,
            'vehicleTypes'              => $vehicleType,
            'vehicleSpecifications'     => $vehicleSpecification,
            'vehicleHasSpecifications'  => $vehicleHasSpecifications,
            'imagesFiles'               => $images
        ];

        return view('admin.vehicles.edit', $data);
    }

    public function imageRemove(Request $request)
    {
        $vehicle_id = $request->input('id');

        $vehicles = Vehicles::findOrFail($vehicle_id);

        $images = $vehicles->vehicle_images;

        $picture = explode('|', $images);

        if (in_array($request->input('image'), $picture)) {
            $remove_index =  array_search($request->input('image'), $picture);
            unset($picture[$remove_index]);
            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/vehicles/'.$request->input('image')));
            if (file_exists($unlink)) {
                unlink($unlink);
            }
        }

        $images = implode('|', $picture);

        $vehicles->vehicle_images = $images;
        if ($vehicles->save()) {
        
            $data = [
                'success'=> 1,
                'msg'=>'Image remove successfully',
                'Accomodation'=> $vehicles
            ];
            return response()->json($data);
        
        } else {
        
           $data = [
                'success'=> 0,
                'msg'=>"Image cannot removed",
                'Accomodation'=> $vehicles
            ];
            return response()->json($data);
        
        }
    }

    /**
     * Update the specified Vehicles in storage.
     *
     * @param  int              $id
     * @param UpdateVehiclesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVehiclesRequest $request)
    {
        $vehicles = Vehicles::findOrFail($id);

        if (empty($vehicles)) {
            Session::Flash('msg.error', 'Vehicles not found');

            return redirect(route('admin.vehicles.index'));
        }

        if ($this->vehiclesRepository->update($request, $id)) {
            Session::Flash('msg.success', 'Vehicles updated successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicles were not updated.');
        }

        return redirect(route('admin.vehicles.index'));
    }

    /**
     * Remove the specified Vehicles from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicles = Vehicles::findOrFail($id);

        if (empty($vehicles)) {
            Session::Flash('msg.error', 'Vehicles not found');

            return redirect(route('admin.vehicles.index'));
        }

        if ($this->vehiclesRepository->delete($vehicles)) {
            Flash::success('msg.success', 'Vehicles deleted successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicles deleted successfully.');
        }

        return redirect(route('admin.vehicles.index'));
    }
}
