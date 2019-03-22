<?php

return [

	'FROM_MAIL_ADDRESS'	=> env('ADMIN_EMAIL', 'syednazir13@gmail.com'),


    'RECAPTCHA'  => [

        'SITE_KEY'      => env('RECAPTCH_SITE_KEY'),

        'SECRET_KEY'    => env('RECAPTCH_SECRET_KEY'),

    	'VERIFY_BASE_URL'	=> env('RECAPTCH_VERIFY_URL', 'https://www.google.com/recaptcha/api/siteverify?'),
    ],

    'BOOKING'	=> [
    	'SUBJECT'	=> env('BOOKING_MAIL_SUBJECT', 'You have a new booking')
    ],

];
