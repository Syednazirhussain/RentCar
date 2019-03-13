<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Customers;
use InfyOm\Generator\Common\BaseRepository;
use App\Http\Requests\Admin\CreateCustomersRequest;
use App\Http\Requests\Admin\UpdateCustomersRequest;

/**
 * Class CustomersRepository
 * @package App\Repositories\Admin
 * @version March 12, 2019, 10:54 am UTC
 *
 * @method Customers findWithoutFail($id, $columns = ['*'])
 * @method Customers find($id, $columns = ['*'])
 * @method Customers first($columns = ['*'])
*/
class CustomersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'f_name',
        'l_name',
        'phone',
        'nic',
        'nic_front_image',
        'nic_back_image',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Customers::class;
    }

    public function customerInput(CreateCustomersRequest $request) {
        $input['f_name'] = $request->input('f_name');
        $input['l_name'] = $request->input('l_name');
        $input['phone'] = (int) $request->input('phone');
        $input['nic'] = (int) $request->input('nic');
        $input['email'] = $request->input('email');
        $input['password'] = bcrypt($request->input('password'));
        if ($request->hasFile('nic_front_image')) {
            $path = $request->file('nic_front_image')->store('public/customers');
            $path = explode("/", $path);
            $count = count($path)-1;
            $input['nic_front_image'] = $path[$count];
        }
        if ($request->hasFile('nic_back_image')) {
            $path = $request->file('nic_front_image')->store('public/customers');
            $path = explode("/", $path);
            $count = count($path)-1;
            $input['nic_back_image'] = $path[$count];
        }
        return $input;
    }

    public function customerUpdate(UpdateCustomersRequest $request, Customers $customer) {
        $input['f_name'] = $request->input('f_name');
        $input['l_name'] = $request->input('l_name');
        $input['phone']  = $request->input('phone');
        $input['nic']    = $request->input('nic');
        $input['email']  = $request->input('email');
        if (!is_null( $request->input('password') )) {
            $input['password'] = bcrypt($request->input('password'));
        }
        if ($request->hasFile('nic_front_image')) {
            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/customers/'.$customer->nic_front_image));
            unlink($unlink);
            $path = $request->file('nic_front_image')->store('public/customers');
            $path = explode("/", $path);
            $count = count($path)-1;
            $input['nic_front_image'] = $path[$count];
        }
        if ($request->hasFile('nic_back_image')) {
            $unlink = str_replace($_SERVER['HTTP_ORIGIN'], $_SERVER['DOCUMENT_ROOT'], asset('storage/customers/'.$customer->nic_back_image));
            unlink($unlink);
            $path = $request->file('nic_back_image')->store('public/customers');
            $path = explode("/", $path);
            $count = count($path)-1;
            $input['nic_back_image'] = $path[$count];
        }
        return $input;
    }
}
