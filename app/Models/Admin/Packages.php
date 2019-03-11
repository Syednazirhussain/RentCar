<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Packages
 * @package App\Models\Admin
 * @version March 10, 2019, 11:41 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 * @property time package_start_time
 * @property time package_end_time
 * @property time package_overtime_rate
 * @property float package_rate
 * @property float package_extra_fuel
 */
class Packages extends Model
{
    use SoftDeletes;

    public $table = 'packages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'package_start_time',
        'package_end_time',
        'package_overtime_rate',
        'package_rate',
        'package_extra_fuel'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'package_rate' => 'float',
        'package_extra_fuel' => 'float'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'                      => 'required',
        'package_start_time'        => 'required|date',
        'package_end_time'          => 'required|date',
        'package_overtime_rate'     => 'required',
        'package_rate'              => 'required',
        'package_extra_fuel'        => 'required'  
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Admin\Booking::class);
    }
}
