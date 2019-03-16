<?php

namespace App\Repositories\Admin;

use App\Http\Requests\Admin\CreateBookingRequest;
use App\Http\Requests\Admin\UpdateBookingRequest;
use App\Models\Admin\Booking;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class BookingRepository
 * @package App\Repositories\Admin
 * @version March 13, 2019, 4:20 pm UTC
 *
 * @method Booking findWithoutFail($id, $columns = ['*'])
 * @method Booking find($id, $columns = ['*'])
 * @method Booking first($columns = ['*'])
*/
class BookingRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'customer_id',
        'package_id',
        'booking_date',
        'pickup_time',
        'dropoff_time',
        'pickup_address',
        'dropoff_address'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Booking::class;
    }

    public function bookingInput(CreateBookingRequest $request) {
        // dd( strtotime($request->input('pickup_time')) );
        $input['customer_id']  = $request->input('customer_id');
        $input['package_id']  = $request->input('package_id');
        $input['booking_date']  = $request->input('booking_date');
        $input['pickup_time']  = $request->input('pickup_time');
        $input['dropoff_time']  = $request->input('dropoff_time');
        $input['pickup_address']  = strip_tags($request->input('pickup_address'));
        $input['dropoff_address']  = strip_tags($request->input('dropoff_address'));
        return $input;
    }

    public function bookingUpdateInput(UpdateBookingRequest $request) {
        $input['customer_id']  = $request->input('customer_id');
        $input['package_id']  = $request->input('package_id');
        $input['booking_date']  = $request->input('booking_date');
        $input['pickup_time']  = $request->input('pickup_time');
        $input['dropoff_time']  = $request->input('dropoff_time');
        $input['pickup_address']  = strip_tags($request->input('pickup_address'));
        $input['dropoff_address']  = strip_tags($request->input('dropoff_address'));
        return $input;
    }
}
