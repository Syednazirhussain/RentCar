<?php

namespace App\Repositories\Admin;

use App\Models\Admin\VehicleSpecification;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VehicleSpecificationRepository
 * @package App\Repositories\Admin
 * @version March 9, 2019, 12:16 pm UTC
 *
 * @method VehicleSpecification findWithoutFail($id, $columns = ['*'])
 * @method VehicleSpecification find($id, $columns = ['*'])
 * @method VehicleSpecification first($columns = ['*'])
*/
class VehicleSpecificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VehicleSpecification::class;
    }
}
