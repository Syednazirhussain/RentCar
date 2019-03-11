<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class VehicleSpecification
 * @package App\Models\Admin
 * @version March 9, 2019, 12:16 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection VehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 */
class VehicleSpecification extends Model
{
    use SoftDeletes;

    public $table = 'vehicle_specifications';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'  =>  'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicleHasSpecifications()
    {
        return $this->hasMany(\App\Models\Admin\VehicleHasSpecification::class);
    }
}
