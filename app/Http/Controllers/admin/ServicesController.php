<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateServicesRequest;
use App\Http\Requests\Admin\UpdateServicesRequest;
use App\Repositories\Admin\ServicesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class ServicesController extends Controller
{
    /** @var  ServicesRepository */
    private $servicesRepository;

    public function __construct(ServicesRepository $servicesRepo)
    {
        $this->servicesRepository = $servicesRepo;
    }

    /**
     * Display a listing of the Services.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->servicesRepository->pushCriteria(new RequestCriteria($request));
        $services = $this->servicesRepository->all();

        return view('admin.services.index')
            ->with('services', $services);
    }

    /**
     * Show the form for creating a new Services.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created Services in storage.
     *
     * @param CreateServicesRequest $request
     *
     * @return Response
     */
    public function store(CreateServicesRequest $request)
    {
        $input = $this->servicesRepository->addServiceInput($request);        

        $services = $this->servicesRepository->create($input);

        Session::Flash('msg.success', 'Services saved successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Display the specified Services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Session::Flash('msg.error', 'Services not found');

            return redirect(route('admin.services.index'));
        }

        return view('admin.services.show')->with('services', $services);
    }

    /**
     * Show the form for editing the specified Services.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Session::Flash('msg.error', 'Services not found');

            return redirect(route('admin.services.index'));
        }

        return view('admin.services.edit')->with('services', $services);
    }

    /**
     * Update the specified Services in storage.
     *
     * @param  int              $id
     * @param UpdateServicesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateServicesRequest $request)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Session::Flash('msg.error', 'Services not found');

            return redirect(route('admin.services.index'));
        }

        $input = $this->servicesRepository->updateServiceInput($request, $services);

        $services = $this->servicesRepository->update($input, $id);

        Session::Flash('msg.success', 'Services updated successfully.');

        return redirect(route('admin.services.index'));
    }

    /**
     * Remove the specified Services from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $services = $this->servicesRepository->findWithoutFail($id);

        if (empty($services)) {
            Session::Flash('msg.error', 'Services not found');

            return redirect(route('admin.services.index'));
        }

        $this->servicesRepository->removeServiceImage($services);

        $this->servicesRepository->delete($id);

        Session::Flash('msg.success', 'Services deleted successfully.');

        return redirect(route('admin.services.index'));
    }
}
