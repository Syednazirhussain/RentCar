<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vendor
 * @package App\Models\Admin
 * @version March 9, 2019, 11:56 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection Vehicle
 * @property string name
 * @property string logo
 */
class Vendor extends Model
{
    use SoftDeletes;

    public $table = 'vendors';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'logo'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'logo' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'  => 'required|String|min:3'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vehicles()
    {
        return $this->hasMany(\App\Models\Admin\Vehicle::class);
    }
}
