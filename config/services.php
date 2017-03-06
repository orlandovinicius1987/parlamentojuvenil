<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_API_KEY'),
    ],

    'mandrill' => [
        'secret' => '',
    ],

    'ses' => [
        'key'    => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => '',
        'secret' => '',
    ],

    'googleMaps' => [
        'key'    => env('GOOGLE_MAPS_API_KEY'),
    ],

    // Login social - Facebook
    'facebook' => [
        'client_id'     => '907815562624609',
        'client_secret' => '0e49c2749167ae4e0211c12257b24d43',
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/facebook/callback',
    ],

    // Login social - Twitter
    'twitter' => [
        'client_id'     => 'MZ5djJUKHM5xgrqi6BdbxgQbh',
        'client_secret' => 'KGm94qEM7xFbNmtVmXbJ5rH95oAg6fCVdBmhHjcrNWGKb2OQht',
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/twitter/callback',
    ],

    // Login social - youtube
    'youtube' => [
        'client_id'     => '563315525052-vl6vq8akthigmkepunpsa6lcg446dni6.apps.googleusercontent.com',
        'client_secret' => 'qX-dv4GFcYblV5AxiaL_N-Kf',
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/youtube/callback',
    ],

    // Login social - linkedIn

    'linkedin' => [
        'client_id'     => '78bhoat9yyi3yo',
        'client_secret' => 'R6vtjHjmG0yDEu1f',
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/linkedin/callback',
    ],

    // Login social - instagram
    'instagram' => [
        'client_id'     => '5a7f40d8204f43d8b50fd015455179d4',
        'client_secret' => 'b27d0a5f9c1641158f41574ce7181e36',
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/instagram/callback',
    ],


    
];
