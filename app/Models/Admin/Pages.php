<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Pages
 * @package App\Models\Admin
 * @version March 11, 2019, 2:48 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 * @property string short_code
 * @property string description
 * @property string summery
 */
class Pages extends Model
{
    use SoftDeletes;

    public $table = 'pages';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'short_code',
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
        'short_code' => 'string',
        'description' => 'string',
        'summery' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name'          => 'required',
        'short_code'    => 'unique:pages,short_code',
        'description'   => 'required'
    ];

    
}
