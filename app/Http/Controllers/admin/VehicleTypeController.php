<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateVehicleTypeRequest;
use App\Http\Requests\Admin\UpdateVehicleTypeRequest;
use App\Repositories\Admin\VehicleTypeRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use App\Models\Admin\VehicleType;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class VehicleTypeController extends Controller
{
    /** @var  VehicleTypeRepository */
    private $vehicleTypeRepository;

    public function __construct(VehicleTypeRepository $vehicleTypeRepo)
    {
        $this->vehicleTypeRepository = $vehicleTypeRepo;
    }

    /**
     * Display a listing of the VehicleType.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $vehicleTypes = VehicleType::all();

        return view('admin.vehicle_types.index')->with('vehicleTypes', $vehicleTypes);
    }

    /**
     * Show the form for creating a new VehicleType.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vehicle_types.create');
    }

    /**
     * Store a newly created VehicleType in storage.
     *
     * @param CreateVehicleTypeRequest $request
     *
     * @return Response
     */
    public function store(CreateVehicleTypeRequest $request)
    {
        $vehicleType = $this->vehicleTypeRepository->create($request);

        if ($vehicleType) {
            Session::Flash('msg.success', 'Vehicle type created successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicle type were not created');
        }

        return redirect(route('admin.vehicleTypes.index'));
    }

    /**
     * Display the specified VehicleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicleType = $this->vehicleTypeRepository->findWithoutFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('admin.vehicleTypes.index'));
        }

        return view('admin.vehicle_types.show')->with('vehicleType', $vehicleType);
    }

    /**
     * Show the form for editing the specified VehicleType.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicleType = VehicleType::findOrFail($id);

        if (empty($vehicleType)) {
            Session::Flash('msg.error','Vehicle Type not found');

            return redirect(route('admin.vehicleTypes.index'));
        }

        return view('admin.vehicle_types.edit')->with('vehicleType', $vehicleType);
    }

    /**
     * Update the specified VehicleType in storage.
     *
     * @param  int              $id
     * @param UpdateVehicleTypeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVehicleTypeRequest $request)
    {
        $vehicleType = VehicleType::findOrFail($id);

        if (empty($vehicleType)) {
            Flash::error('Vehicle Type not found');

            return redirect(route('admin.vehicleTypes.index'));
        }

        $vehicleType = $this->vehicleTypeRepository->update($request, $id);

        if ($vehicleType) {
            Session::Flash('msg.success', 'Vehicle Type updated successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicle Type were not updated.'); 
        }

        return redirect(route('admin.vehicleTypes.index'));
    }

    /**
     * Remove the specified VehicleType from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicleType = VehicleType::findOrFail($id);

        if (empty($vehicleType)) {
            Session::Flash('msg.error', 'Vehicle Type not found');

            return redirect(route('admin.vehicleTypes.index'));
        }

        $vehicleType = $this->vehicleTypeRepository->delete($id);

        if ($vehicleType) {
            Session::Flash('msg.success', 'Vehicle Type deleted successfully.');
        } else {
            Session::Flash('msg.error', 'Vehicle Type were not deleted.'); 
        }

        return redirect(route('admin.vehicleTypes.index'));
    }
}
