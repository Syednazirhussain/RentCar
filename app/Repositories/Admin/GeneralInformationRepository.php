<?php

namespace App\Repositories\Admin;

use App\Models\Admin\GeneralInformation;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GeneralInformationRepository
 * @package App\Repositories\Admin
 * @version March 10, 2019, 3:29 pm UTC
 *
 * @method GeneralInformation findWithoutFail($id, $columns = ['*'])
 * @method GeneralInformation find($id, $columns = ['*'])
 * @method GeneralInformation first($columns = ['*'])
*/
class GeneralInformationRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'short_name',
        'title',
        'title_description',
        'about_description',
        'logo',
        'footer_description',
        'helpline',
        'contact',
        'address',
        'email',
        'instagram',
        'pinterest',
        'twitter',
        'youtube',
        'linkdin',
        'facebook'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return GeneralInformation::class;
    }
}
