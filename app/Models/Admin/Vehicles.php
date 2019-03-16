<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vehicles
 * @package App\Models\Admin
 * @version March 9, 2019, 1:30 pm UTC
 *
 * @property \App\Models\Admin\Vendor vendor
 * @property \App\Models\Admin\VehicleType vehicleType
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection VehicleHasSpecification
 * @property string name
 * @property string vehicle_number
 * @property string vehicle_images
 * @property integer model
 * @property integer vehicle_type_id
 * @property integer vendor_id
 */
class Vehicles extends Model
{
    use SoftDeletes;

    public $table = 'vehicles';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'vehicle_number',
        'vehicle_images',
        'model',
        'vehicle_type_id',
        'vendor_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'vehicle_number' => 'string',
        'vehicle_images' => 'string',
        'model' => 'integer',
        'vehicle_type_id' => 'integer',
        'vendor_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'  => 'required|min:3',
        'vehicle_number'    => 'required|Regex:/^[A-Z]{3}[-][0-9]{3}$/i',
        'model'     => 'required|numeric',
        'vehicle_type_id'   => 'required|integer',
        'vendor_id'   => 'required|integer'  
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vendor()
    {
        return $this->belongsTo(\App\Models\Admin\VehicleType::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function vehicleType()
    {
        return $this->belongsTo(\App\Models\Admin\Vendor::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicleHasSpecifications()
    {
        return $this->hasMany(\App\Models\Admin\VehicleHasSpecification::class);
    }
}
