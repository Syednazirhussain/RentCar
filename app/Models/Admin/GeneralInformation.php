<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class GeneralInformation
 * @package App\Models\Admin
 * @version March 10, 2019, 3:29 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection booking
 * @property \Illuminate\Database\Eloquent\Collection vehicleHasSpecification
 * @property \Illuminate\Database\Eloquent\Collection vehicles
 * @property string name
 * @property string short_name
 * @property string title
 * @property string title_description
 * @property string about_description
 * @property string logo
 * @property string footer_description
 * @property string helpline
 * @property string contact
 * @property string address
 * @property string email
 * @property string instagram
 * @property string pinterest
 * @property string twitter
 * @property string youtube
 * @property string linkdin
 * @property string facebook
 */
class GeneralInformation extends Model
{
    use SoftDeletes;

    public $table = 'general_information';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';

    protected $primaryKey = 'code';

    protected $dates = ['deleted_at'];


    public $fillable = [
        'code',
        'name',
        'short_name',
        'title',
        'title_description',
        'about_description',
        'logo',
        'footer_description',
        'helpline',
        'contact',
        'address',
        'email',
        'instagram',
        'pinterest',
        'twitter',
        'youtube',
        'linkdin',
        'facebook'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'code' => 'string',
        'name' => 'string',
        'short_name' => 'string',
        'title' => 'string',
        'title_description' => 'string',
        'about_description' => 'string',
        'logo' => 'string',
        'footer_description' => 'string',
        'helpline' => 'string',
        'contact' => 'string',
        'address' => 'string',
        'email' => 'string',
        'instagram' => 'string',
        'pinterest' => 'string',
        'twitter' => 'string',
        'youtube' => 'string',
        'linkdin' => 'string',
        'facebook' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
