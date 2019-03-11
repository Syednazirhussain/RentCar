<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Vendor;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VendorRepository
 * @package App\Repositories\Admin
 * @version March 9, 2019, 11:56 am UTC
 *
 * @method Vendor findWithoutFail($id, $columns = ['*'])
 * @method Vendor find($id, $columns = ['*'])
 * @method Vendor first($columns = ['*'])
*/
class VendorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'logo'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vendor::class;
    }
}
