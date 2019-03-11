<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Vehicles;
use App\Models\Admin\VehicleHasSpecification;
use InfyOm\Generator\Common\BaseRepository;
use App\Http\Requests\Admin\CreateVehiclesRequest;
use App\Http\Requests\Admin\UpdateVehiclesRequest;
/**
 * Class VehiclesRepository
 * @package App\Repositories\Admin
 * @version March 9, 2019, 1:30 pm UTC
 *
 * @method Vehicles findWithoutFail($id, $columns = ['*'])
 * @method Vehicles find($id, $columns = ['*'])
 * @method Vehicles first($columns = ['*'])
*/
class VehiclesRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'vehicle_number',
        'vehicle_images',
        'model',
        'vehicle_type_id',
        'vendor_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Vehicles::class;
    }

    public function create(CreateVehiclesRequest $request)
    {
        $input = $request->all();

        $vehicles = new Vehicles;
        $vehicles->name = $request->input('name');
        $vehicles->vehicle_number = $request->input('vehicle_number');
        $vehicles->model = $request->input('model');
        $vehicles->vendor_id = $request->input('vendor_id');
        $vehicles->vehicle_type_id = $request->input('vehicle_type_id');
        if(isset($input['docFiles']))
        {
            $files = $input['docFiles'];

            if(count($files) > 0)
            {
                $file_names = [];
                $index = 0;
                foreach ($files as  $file) 
                {
                    $path = $file->store('public/vehicles');
                    $pathArr = explode('/', $path);
                    $count = count($pathArr);
                    $path = $pathArr[$count - 1];
                    $images[$index] = $path;
                    $index++;
                }
          
            }
            $vehicles->vehicle_images =  implode("|",$images);
        }
        if ($vehicles->save()) {
            $vehicle_id = $vehicles->id;
            foreach ($input['specifications'] as $specification) {
                VehicleHasSpecification::updateOrCreate(
                    [
                        'vehicle_id'                => $vehicle_id,
                        'vehicle_specification_id'  => $specification
                    ],
                    [
                        'vehicle_id'                => $vehicle_id
                    ]
                );
            }
            return true;
        } else {
            return false;
        }
    }

    public function update(UpdateVehiclesRequest $request, $id) {
        $input = $request->all();

        $vehicles = Vehicles::findOrFail($id);
        $vehicles->name = $request->input('name');
        $vehicles->vehicle_number = $request->input('vehicle_number');
        $vehicles->model = $request->input('model');
        $vehicles->vendor_id = $request->input('vendor_id');
        $vehicles->vehicle_type_id = $request->input('vehicle_type_id');
        if(isset($input['docFiles']))
        {
            $files = $input['docFiles'];

            if(count($files) > 0)
            {
                $file_names = [];
                $index = 0;
                foreach ($files as  $file) 
                {
                    $path = $file->store('public/vehicles');
                    $pathArr = explode('/', $path);
                    $count = count($pathArr);
                    $path = $pathArr[$count - 1];
                    $images[$index] = $path;
                    $index++;
                }
          
            }
            if ($vehicles->vehicle_images != null) {
                $vehicles->vehicle_images = $vehicles->vehicle_images.'|'.implode("|", $images);
            } else {
                $vehicles->vehicle_images = implode("|", $images);
            }
        }
        if ($vehicles->save()) {
            $vehicle_id = $vehicles->id;
            foreach ($input['specifications'] as $specification) {
                VehicleHasSpecification::updateOrCreate(
                    [
                        'vehicle_id'                => $vehicle_id,
                        'vehicle_specification_id'  => $specification
                    ],
                    [
                        'vehicle_id'                => $vehicle_id
                    ]
                );
            }
            return true;
        } else {
            return false;
        }
    }

}
