<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Offers;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class OffersRepository
 * @package App\Repositories\Admin
 * @version March 10, 2019, 11:09 am UTC
 *
 * @method Offers findWithoutFail($id, $columns = ['*'])
 * @method Offers find($id, $columns = ['*'])
 * @method Offers first($columns = ['*'])
*/
class OffersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'summery'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Offers::class;
    }
}
