<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Packages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PackagesRepository
 * @package App\Repositories\Admin
 * @version March 10, 2019, 11:41 am UTC
 *
 * @method Packages findWithoutFail($id, $columns = ['*'])
 * @method Packages find($id, $columns = ['*'])
 * @method Packages first($columns = ['*'])
*/
class PackagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'package_start_time',
        'package_end_time',
        'package_overtime_rate',
        'package_rate',
        'package_extra_fuel'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Packages::class;
    }
}
