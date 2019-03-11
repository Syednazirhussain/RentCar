<?php

namespace App\Repositories\Admin;

use App\Models\Admin\VehicleHasSpecification;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class VehicleHasSpecificationRepository
 * @package App\Repositories\Admin
 * @version March 10, 2019, 6:38 am UTC
 *
 * @method VehicleHasSpecification findWithoutFail($id, $columns = ['*'])
 * @method VehicleHasSpecification find($id, $columns = ['*'])
 * @method VehicleHasSpecification first($columns = ['*'])
*/
class VehicleHasSpecificationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'vehicle_id',
        'vehicle_specification_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return VehicleHasSpecification::class;
    }
}
