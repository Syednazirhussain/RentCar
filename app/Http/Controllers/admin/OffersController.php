<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateOffersRequest;
use App\Http\Requests\Admin\UpdateOffersRequest;
use App\Repositories\Admin\OffersRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Session;

class OffersController extends Controller
{
    /** @var  OffersRepository */
    private $offersRepository;

    public function __construct(OffersRepository $offersRepo)
    {
        $this->offersRepository = $offersRepo;
    }

    /**
     * Display a listing of the Offers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->offersRepository->pushCriteria(new RequestCriteria($request));
        $offers = $this->offersRepository->all();

        return view('admin.offers.index')
            ->with('offers', $offers);
    }

    /**
     * Show the form for creating a new Offers.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.offers.create');
    }

    /**
     * Store a newly created Offers in storage.
     *
     * @param CreateOffersRequest $request
     *
     * @return Response
     */
    public function store(CreateOffersRequest $request)
    {
        $input = $request->all();

        $offers = $this->offersRepository->create($input);

        Session::Flash('msg.success', 'Offers saved successfully.');

        return redirect(route('admin.offers.index'));
    }

    /**
     * Display the specified Offers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offers = $this->offersRepository->findWithoutFail($id);

        if (empty($offers)) {
            Session::Flash('msg.error', 'Offers not found');

            return redirect(route('admin.offers.index'));
        }

        return view('admin.offers.show')->with('offers', $offers);
    }

    /**
     * Show the form for editing the specified Offers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offers = $this->offersRepository->findWithoutFail($id);

        if (empty($offers)) {
            Session::Flash('msg.error', 'Offers not found');

            return redirect(route('admin.offers.index'));
        }

        return view('admin.offers.edit')->with('offers', $offers);
    }

    /**
     * Update the specified Offers in storage.
     *
     * @param  int              $id
     * @param UpdateOffersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOffersRequest $request)
    {
        $offers = $this->offersRepository->findWithoutFail($id);

        if (empty($offers)) {
            Session::Flash('msg.error', 'Offers not found');

            return redirect(route('admin.offers.index'));
        }

        $offers = $this->offersRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Offers updated successfully.');

        return redirect(route('admin.offers.index'));
    }

    /**
     * Remove the specified Offers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offers = $this->offersRepository->findWithoutFail($id);

        if (empty($offers)) {
            Session::Flash('msg.error', 'Offers not found');

            return redirect(route('admin.offers.index'));
        }

        $this->offersRepository->delete($id);

        Session::Flash('msg.success', 'Offers deleted successfully.');

        return redirect(route('admin.offers.index'));
    }
}
