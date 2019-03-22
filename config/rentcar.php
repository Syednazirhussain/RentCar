<?php

return [

    'RECAPTCHA'  => [


        'SITE_KEY'      => env('RECAPTCH_SITE_KEY'),

        'SECRET_KEY'    => env('RECAPTCH_SECRET_KEY'),

    	'VERIFY_BASE_URL'	=> env('RECAPTCH_VERIFY_URL', 'https://www.google.com/recaptcha/api/siteverify?'),
    ]


];
