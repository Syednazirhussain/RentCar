<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Customers;
use InfyOm\Generator\Common\BaseRepository;

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

    public function customerInput(CreateCustomersRequest $input) {
        dd($request->all());
    }
}
