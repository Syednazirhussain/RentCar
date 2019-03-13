<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateCustomersRequest;
use App\Http\Requests\Admin\UpdateCustomersRequest;
use App\Repositories\Admin\CustomersRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class CustomersController extends Controller
{
    /** @var  CustomersRepository */
    private $customersRepository;

    public function __construct(CustomersRepository $customersRepo)
    {
        $this->customersRepository = $customersRepo;
    }

    /**
     * Display a listing of the Customers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->customersRepository->pushCriteria(new RequestCriteria($request));
        $customers = $this->customersRepository->all();

        return view('admin.customers.index')
            ->with('customers', $customers);
    }

    /**
     * Show the form for creating a new Customers.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created Customers in storage.
     *
     * @param CreateCustomersRequest $request
     *
     * @return Response
     */
    public function store(CreateCustomersRequest $request)
    {
        $input = $this->customersRepository->customerInput($request);

        $customers = $this->customersRepository->create($input);

        Session::Flash('msg.success', 'Customers saved successfully.');

        return redirect(route('admin.customers.index'));
    }



    /**
     * Show the form for editing the specified Customers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $customers = $this->customersRepository->findWithoutFail($id);

        if (empty($customers)) {
            Session::Flash('msg.error', 'Customers not found');

            return redirect(route('admin.customers.index'));
        }

        return view('admin.customers.edit')->with('customers', $customers);
    }

    /**
     * Update the specified Customers in storage.
     *
     * @param  int              $id
     * @param UpdateCustomersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCustomersRequest $request)
    {
        $customers = $this->customersRepository->findWithoutFail($id);

        if (empty($customers)) {
            Session::Flash('msg.error', 'Customers not found');

            return redirect(route('admin.customers.index'));
        }

        $input = $this->customersRepository->customerUpdate($request, $customers);

        $customers = $this->customersRepository->update($input, $id);

        Session::Flash('msg.success', 'Customers updated successfully.');

        return redirect(route('admin.customers.index'));
    }

    /**
     * Remove the specified Customers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $customers = $this->customersRepository->findWithoutFail($id);

        if (empty($customers)) {
            Session::Flash('msg.error', 'Customers not found');

            return redirect(route('admin.customers.index'));
        }

        $this->customersRepository->delete($id);

        Session::Flash('msg.success', 'Customers deleted successfully.');

        return redirect(route('admin.customers.index'));
    }
}
