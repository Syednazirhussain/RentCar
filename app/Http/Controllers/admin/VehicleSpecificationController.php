<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateVehicleSpecificationRequest;
use App\Http\Requests\Admin\UpdateVehicleSpecificationRequest;
use App\Repositories\Admin\VehicleSpecificationRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class VehicleSpecificationController extends Controller
{
    /** @var  VehicleSpecificationRepository */
    private $vehicleSpecificationRepository;

    public function __construct(VehicleSpecificationRepository $vehicleSpecificationRepo)
    {
        $this->vehicleSpecificationRepository = $vehicleSpecificationRepo;
    }

    /**
     * Display a listing of the VehicleSpecification.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vehicleSpecificationRepository->pushCriteria(new RequestCriteria($request));
        $vehicleSpecifications = $this->vehicleSpecificationRepository->all();

        return view('admin.vehicle_specifications.index')
            ->with('vehicleSpecifications', $vehicleSpecifications);
    }

    /**
     * Show the form for creating a new VehicleSpecification.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vehicle_specifications.create');
    }

    /**
     * Store a newly created VehicleSpecification in storage.
     *
     * @param CreateVehicleSpecificationRequest $request
     *
     * @return Response
     */
    public function store(CreateVehicleSpecificationRequest $request)
    {
        $input = $request->all();

        $vehicleSpecification = $this->vehicleSpecificationRepository->create($input);

        Session::Flash('msg.success', 'Vehicle Specification saved successfully.');

        return redirect(route('admin.vehicleSpecifications.index'));
    }

    /**
     * Display the specified VehicleSpecification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vehicleSpecification = $this->vehicleSpecificationRepository->findWithoutFail($id);

        if (empty($vehicleSpecification)) {
            Session::Flash('msg.error', 'Vehicle Specification not found');

            return redirect(route('admin.vehicleSpecifications.index'));
        }

        return view('admin.vehicle_specifications.show')->with('vehicleSpecification', $vehicleSpecification);
    }

    /**
     * Show the form for editing the specified VehicleSpecification.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vehicleSpecification = $this->vehicleSpecificationRepository->findWithoutFail($id);

        if (empty($vehicleSpecification)) {
            Session::Flash('msg.error', 'Vehicle Specification not found');

            return redirect(route('admin.vehicleSpecifications.index'));
        }

        return view('admin.vehicle_specifications.edit')->with('vehicleSpecification', $vehicleSpecification);
    }

    /**
     * Update the specified VehicleSpecification in storage.
     *
     * @param  int              $id
     * @param UpdateVehicleSpecificationRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVehicleSpecificationRequest $request)
    {
        $vehicleSpecification = $this->vehicleSpecificationRepository->findWithoutFail($id);

        if (empty($vehicleSpecification)) {
            Session::Flash('msg.error', 'Vehicle Specification not found');

            return redirect(route('admin.vehicleSpecifications.index'));
        }

        $vehicleSpecification = $this->vehicleSpecificationRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Vehicle Specification updated successfully.');

        return redirect(route('admin.vehicleSpecifications.index'));
    }

    /**
     * Remove the specified VehicleSpecification from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vehicleSpecification = $this->vehicleSpecificationRepository->findWithoutFail($id);

        if (empty($vehicleSpecification)) {
            Session::Flash('msg.error', 'Vehicle Specification not found');

            return redirect(route('admin.vehicleSpecifications.index'));
        }

        $this->vehicleSpecificationRepository->delete($id);

        Session::Flash('msg.success', 'Vehicle Specification deleted successfully.');

        return redirect(route('admin.vehicleSpecifications.index'));
    }
}
