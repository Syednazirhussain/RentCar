<?php

namespace App\Repositories\Admin;

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
}
