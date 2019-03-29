<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreatePackagesRequest;
use App\Http\Requests\Admin\UpdatePackagesRequest;
use App\Repositories\Admin\PackagesRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Vehicles;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class PackagesController extends Controller
{
    /** @var  PackagesRepository */
    private $packagesRepository;

    public function __construct(PackagesRepository $packagesRepo)
    {
        $this->packagesRepository = $packagesRepo;
    }

    /**
     * Display a listing of the Packages.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->packagesRepository->pushCriteria(new RequestCriteria($request));
        $packages = $this->packagesRepository->all();

        return view('admin.packages.index')
            ->with('packages', $packages);
    }

    /**
     * Show the form for creating a new Packages.
     *
     * @return Response
     */
    public function create()
    {
        //$vehicles = Vehicles::all();
        return view('admin.packages.create');
    }

    /**
     * Store a newly created Packages in storage.
     *
     * @param CreatePackagesRequest $request
     *
     * @return Response
     */
    public function store(CreatePackagesRequest $request)
    {
        $input = $request->all();

        $packages = $this->packagesRepository->create($input);

        Session::Flash('msg.success', 'Packages saved successfully.');

        return redirect(route('admin.packages.index'));
    }

    /**
     * Display the specified Packages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            Session::Flash('msg.error', 'Packages not found');

            return redirect(route('admin.packages.index'));
        }

        return view('admin.packages.show')->with('packages', $packages);
    }

    /**
     * Show the form for editing the specified Packages.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            Session::Flash('msg.error', 'Packages not found');

            return redirect(route('admin.packages.index'));
        }

        // $vehicles = Vehicles::all();

        return view('admin.packages.edit')->with('packages', $packages);
    }

    /**
     * Update the specified Packages in storage.
     *
     * @param  int              $id
     * @param UpdatePackagesRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePackagesRequest $request)
    {
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            Session::Flash('msg.error', 'Packages not found');

            return redirect(route('admin.packages.index'));
        }

        $packages = $this->packagesRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Packages updated successfully.');

        return redirect(route('admin.packages.index'));
    }

    /**
     * Remove the specified Packages from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $packages = $this->packagesRepository->findWithoutFail($id);

        if (empty($packages)) {
            Session::Flash('msg.error', 'Packages not found');

            return redirect(route('admin.packages.index'));
        }

        $this->packagesRepository->delete($id);

        Session::Flash('msg.success', 'Packages deleted successfully.');

        return redirect(route('admin.packages.index'));
    }
}
