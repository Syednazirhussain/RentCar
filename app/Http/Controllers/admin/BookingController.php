<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\CreateBookingRequest;
use App\Http\Requests\Admin\UpdateBookingRequest;
use App\Repositories\Admin\BookingRepository;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Customers;
use App\Models\Admin\Packages;
use Prettus\Repository\Criteria\RequestCriteria;
use Flash;
use Response;
use Session;

class BookingController extends Controller
{
    /** @var  BookingRepository */
    private $bookingRepository;

    public function __construct(BookingRepository $bookingRepo)
    {
        $this->bookingRepository = $bookingRepo;
    }

    /**
     * Display a listing of the Booking.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->bookingRepository->pushCriteria(new RequestCriteria($request));
        $bookings = $this->bookingRepository->all();

        return view('admin.bookings.index')
            ->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new Booking.
     *
     * @return Response
     */
    public function create()
    {
        $customers = Customers::all();
        $packages = Packages::all();

        $data = [
            'customers' => $customers,
            'packages'  => $packages  
        ];

        return view('admin.bookings.create', $data);
    }

    /**
     * Store a newly created Booking in storage.
     *
     * @param CreateBookingRequest $request
     *
     * @return Response
     */
    public function store(CreateBookingRequest $request)
    {
        $input = $this->bookingRepository->bookingInput($request);

        $booking = $this->bookingRepository->create($input);

        Session::Flash('msg.success', 'Booking saved successfully.');

        return redirect(route('admin.bookings.index'));
    }

    /**
     * Show the form for editing the specified Booking.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);
        $customers = Customers::all();
        $packages = Packages::all();

        if (empty($booking)) {
            Session::Flash('msg.error', 'Booking not found');

            return redirect(route('admin.bookings.index'));
        }

        $data = [
            'booking'   => $booking,
            'customers' => $customers,
            'packages'  => $packages  
        ];

        return view('admin.bookings.edit', $data);
    }

    /**
     * Update the specified Booking in storage.
     *
     * @param  int              $id
     * @param UpdateBookingRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBookingRequest $request)
    {
        // dd($request->all());
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Session::Flash('msg.error', 'Booking not found');

            return redirect(route('admin.bookings.index'));
        }

        $input = $this->bookingRepository->bookingUpdateInput($request);

        $booking = $this->bookingRepository->update($request->all(), $id);

        Session::Flash('msg.success', 'Booking updated successfully.');

        return redirect(route('admin.bookings.index'));
    }

    /**
     * Remove the specified Booking from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $booking = $this->bookingRepository->findWithoutFail($id);

        if (empty($booking)) {
            Session::Flash('msg.error', 'Booking not found');

            return redirect(route('admin.bookings.index'));
        }

        $this->bookingRepository->delete($id);

        Session::Flash('msg.success', 'Booking deleted successfully.');

        return redirect(route('admin.bookings.index'));
    }
}
