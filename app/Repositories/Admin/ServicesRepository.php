<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Services;
use InfyOm\Generator\Common\BaseRepository;
use App\Http\Requests\Admin\CreateServicesRequest;
use App\Http\Requests\Admin\UpdateServicesRequest;

/**
 * Class ServicesRepository
 * @package App\Repositories\Admin
 * @version March 18, 2019, 7:57 am UTC
 *
 * @method Services findWithoutFail($id, $columns = ['*'])
 * @method Services find($id, $columns = ['*'])
 * @method Services first($columns = ['*'])
*/
class ServicesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'descriptions'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Services::class;
    }

    public function addServiceInput(CreateServicesRequest $request) {
        $input['title']         =   $request->input('title');
        $input['descriptions']  =   $request->input('descriptions');
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/services');
            $path = explode("/", $path);
            $count = count($path)-1;
            $input['image'] = $path[$count];
        }
        return $input;
    }

    public function updateServiceInput(UpdateServicesRequest $request, Services $service) {
        $input['title']            = $request->input('title');
        $input['descriptions']     = $request->input('descriptions');
        if ($request->hasFile('image')) {

            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/services/'.$service->image));
            if (file_exists($unlink)) {
                unlink($unlink);
            }

            $path           = $request->file('image')->store('public/services');
            $path           = explode("/", $path);
            $count          = count($path)-1;
            $input['image'] = $path[$count];
        }
        return $input;
    }

    public function removeServiceImage(Services $service) {
        $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/services/'.$service->image));
        if (file_exists($unlink)) {
            unlink($unlink);
        }
    }
}
