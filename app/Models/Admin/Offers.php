<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Offers
 * @package App\Models\Admin
 * @version March 10, 2019, 11:09 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 * @property string description
 * @property string summery
 */
class Offers extends Model
{
    use SoftDeletes;

    public $table = 'offers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'description',
        'summery'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'summery' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'          => 'required|min:3|max:45',
        'description'   => 'required|String',
        'summery'       => 'required' 
    ];

    
}
