<?php

namespace App\Models\Admin;

use Eloquent as Model;

/**
 * Class VehicleHasSpecification
 * @package App\Models\Admin
 * @version March 10, 2019, 6:38 am UTC
 *
 * @property \App\Models\Admin\Vehicle vehicle
 * @property \App\Models\Admin\VehicleSpecification vehicleSpecification
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property integer vehicle_id
 * @property integer vehicle_specification_id
 */
class VehicleHasSpecification extends Model
{
    public $table = 'vehicle_has_specification';
    
    public $timestamps = false;

    public $fillable = [
        'vehicle_id',
        'vehicle_specification_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'vehicle_id' => 'integer',
        'vehicle_specification_id' => 'integer'
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
    public function vehicle()
    {
        return $this->belongsTo(\App\Models\Admin\Vehicle::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vehicleSpecification()
    {
        return $this->belongsTo(\App\Models\Admin\VehicleSpecification::class);
    }
}
