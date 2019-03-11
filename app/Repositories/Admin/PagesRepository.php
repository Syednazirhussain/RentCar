<?php

namespace App\Repositories\Admin;

use App\Models\Admin\Pages;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class PagesRepository
 * @package App\Repositories\Admin
 * @version March 11, 2019, 2:48 pm UTC
 *
 * @method Pages findWithoutFail($id, $columns = ['*'])
 * @method Pages find($id, $columns = ['*'])
 * @method Pages first($columns = ['*'])
*/
class PagesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'short_code',
        'description',
        'summery'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Pages::class;
    }
}
