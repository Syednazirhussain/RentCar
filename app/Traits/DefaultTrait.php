<?php

namespace App\Traits;

use App\Models\Admin\GeneralInformation;

Trait DefaultTrait 
{
    function getDefaults() {
        return GeneralInformation::where('code', 'site-setting')->first();
    }
}
