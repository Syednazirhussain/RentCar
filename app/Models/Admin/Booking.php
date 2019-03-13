<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 * @package App\Models\Admin
 * @version March 13, 2019, 4:20 pm UTC
 *
 * @property \App\Models\Admin\Package package
 * @property \App\Models\Admin\Customer customer
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property integer customer_id
 * @property integer package_id
 * @property date booking_date
 * @property time pickup_time
 * @property time dropoff_time
 * @property string pickup_address
 * @property string dropoff_address
 */
class Booking extends Model
{
    use SoftDeletes;

    public $table = 'booking';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'customer_id',
        'package_id',
        'booking_date',
        'pickup_time',
        'dropoff_time',
        'pickup_address',
        'dropoff_address'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'customer_id' => 'integer',
        'package_id' => 'integer',
        'booking_date' => 'date',
        'pickup_address' => 'string',
        'dropoff_address' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function package()
    {
        return $this->belongsTo(\App\Models\Admin\Package::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customer()
    {
        return $this->belongsTo(\App\Models\Admin\Customer::class);
    }
}
