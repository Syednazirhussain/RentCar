<?php

namespace App\Repositories\Admin;

use App\Models\Admin\VehicleType;
use Illuminate\Http\Request;
use InfyOm\Generator\Common\BaseRepository;
use App\Http\Requests\Admin\CreateVehicleTypeRequest;
use App\Http\Requests\Admin\UpdateVehicleTypeRequest;
/**
 * Class VehicleTypeRepository
 * @package App\Repositories\Admin
 * @version March 9, 2019, 6:42 am UTC
 *
 * @method VehicleType findWithoutFail($id, $columns = ['*'])
 * @method VehicleType find($id, $columns = ['*'])
 * @method VehicleType first($columns = ['*'])
*/
class VehicleTypeRepository
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
        return VehicleType::class;
    }

    public function create(CreateVehicleTypeRequest $request) {

        $request->validate([
            'name' => 'required|min:3|max:45',
            'logo' => 'required',
        ]);

        $vehicleType = new VehicleType;

        if ($request->hasFile('logo')) {
            $path = $request->file('logo')->store('public/vendors');
            $path = explode("/", $path);
            $count = count($path)-1;
            $vehicleType->logo = $path[$count];
        }

        $vehicleType->name = $request->input('name');
        return $vehicleType->save();   
    }

    public function update(UpdateVehicleTypeRequest $request, $id) {
        $request->validate([
            'name' => 'required|min:3|max:45'
        ]);

        $vehicleType = VehicleType::findOrFail($id);

        if ($request->hasFile('logo')) {

            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/vendors/'.$request->image));
            if (file_exists($unlink)) {
                unlink($unlink);
            }
            $path = $request->file('logo')->store('public/vendors');
            $path = explode("/", $path);
            $count = count($path)-1;
            $vehicleType->logo = $path[$count];
        }

        $vehicleType->name = $request['name'];
        return $vehicleType->save();
    }

    public function delete($id) {
        return VehicleType::findOrFail($id)->delete();
    }
}
