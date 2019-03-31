<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customers
 * @package App\Models\Admin
 * @version March 12, 2019, 10:54 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection Booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string f_name
 * @property string l_name
 * @property integer phone
 * @property integer nic
 * @property string nic_front_image
 * @property string nic_back_image
 * @property string password
 */
class Customers extends Model implements AuthenticatableContract
{
    use Authenticatable, SoftDeletes;

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'f_name',
        'l_name',
        'phone',
        'nic',
        'nic_front_image',
        'nic_back_image',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'f_name' => 'string',
        'l_name' => 'string',
        'phone' => 'string',
        'nic' => 'string',
        'nic_front_image' => 'string',
        'nic_back_image' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $create_rules = [
        'f_name'            => 'required|min:3|max:45|String',
        'l_name'            => 'required|min:3|max:45|String',
        'phone'             => 'required|digits:11',
        'nic'               => 'required|digits:13',
        'email'             => 'required|email',
        'password'          => 'required'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $update_rules = [
        'f_name'            => 'required|min:3|max:45|String',
        'l_name'            => 'required|min:3|max:45|String',
        'phone'             => 'required|digits:11',
        'nic'               => 'required|digits:13',
        'email'             => 'required|email|unique:customers,email'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Admin\Booking::class,'id');
    }
}
