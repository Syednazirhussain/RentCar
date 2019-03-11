<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateVendorRequest;
use App\Http\Requests\Admin\UpdateVendorRequest;
use App\Repositories\Admin\VendorRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class VendorController extends Controller
{
    /** @var  VendorRepository */
    private $vendorRepository;

    public function __construct(VendorRepository $vendorRepo)
    {
        $this->vendorRepository = $vendorRepo;
    }

    /**
     * Display a listing of the Vendor.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->vendorRepository->pushCriteria(new RequestCriteria($request));
        $vendors = $this->vendorRepository->all();

        return view('admin.vendors.index')
            ->with('vendors', $vendors);
    }

    /**
     * Show the form for creating a new Vendor.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.vendors.create');
    }

    /**
     * Store a newly created Vendor in storage.
     *
     * @param CreateVendorRequest $request
     *
     * @return Response
     */
    public function store(CreateVendorRequest $request)
    {
        $input = $request->all();

        $vendor = $this->vendorRepository->create($input);

        Session::Flash('msg.success', 'Vendor saved successfully.');

        return redirect(route('admin.vendors.index'));
    }

    /**
     * Display the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Session::Flash('Vendor not found');

            return redirect(route('admin.vendors.index'));
        }

        return view('admin.vendors.show')->with('vendor', $vendor);
    }

    /**
     * Show the form for editing the specified Vendor.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Session::Flash('Vendor not found');

            return redirect(route('admin.vendors.index'));
        }

        return view('admin.vendors.edit')->with('vendor', $vendor);
    }

    /**
     * Update the specified Vendor in storage.
     *
     * @param  int              $id
     * @param UpdateVendorRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVendorRequest $request)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Session::Flash('msg.error', 'Vendor not found');

            return redirect(route('admin.vendors.index'));
        }

        $vendor = $this->vendorRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Vendor updated successfully.');

        return redirect(route('admin.vendors.index'));
    }

    /**
     * Remove the specified Vendor from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vendor = $this->vendorRepository->findWithoutFail($id);

        if (empty($vendor)) {
            Session::Flash('msg.error', 'Vendor not found');

            return redirect(route('admin.vendors.index'));
        }

        $this->vendorRepository->delete($id);

        Session::Flash('msg.success', 'Vendor deleted successfully.');

        return redirect(route('admin.vendors.index'));
    }
}
