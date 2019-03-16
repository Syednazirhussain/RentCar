<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Vehicles;
use InfyOm\Generator\Common\BaseRepository;
use App\Models\Admin\VehicleHasSpecification;
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
class VehiclesRepository extends BaseRepository
{
    private $vehicle_specifications = [];

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

    public function vehicleCreateInput(CreateVehiclesRequest $request)
    {
        $input['name']                  = $request->input('name');
        $input['vehicle_number']        = $request->input('vehicle_number');
        $input['model']                 = $request->input('model');
        $input['vendor_id']             = $request->input('vendor_id');
        $input['vehicle_type_id']       = $request->input('vehicle_type_id');
        $this->vehicle_specifications   = $request->input('specifications');
        if($request->hasFile('docFiles'))
        {
            $files = $request->docFiles;

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
            $input['vehicle_images'] =  implode("|",$images);
        }
        return $input;
    }

    public function addVehicleDependency(Vehicles $vehicle) {
        $vehicle_id = $vehicle->id;
        foreach ($this->vehicle_specifications as $specification) {
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
    }

    public function vehicleUpdateInput(UpdateVehiclesRequest $request, Vehicles $vehicle) {

        if ($request->has('specifications')) {
            $this->vehicle_specifications   = $request->input('specifications');      
            $this->addVehicleDependency($vehicle);
        }

        $input['name']                  = $request->input('name');
        $input['vehicle_number']        = $request->input('vehicle_number');
        $input['model']                 = $request->input('model');
        $input['vendor_id']             = $request->input('vendor_id');
        $input['vehicle_type_id']       = $request->input('vehicle_type_id');
        if($request->hasFile('docFiles'))
        {
            $files = $request->docFiles;

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
            if ($vehicle->vehicle_images != null) {
                $input['vehicle_images'] = $vehicle->vehicle_images.'|'.implode("|", $images);
            } else {
                $input['vehicle_images'] = implode("|", $images);
            }
        }

        return $input;
    }


    public function removeVehicleImages(Vehicles $vehicle) {
        $images = explode('|', $vehicle->vehicle_images);
        foreach ($images as $image) {
            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/vehicles/'.$image));
            if (file_exists($unlink)) {
                unlink($unlink);
            }
        }
    }

}
