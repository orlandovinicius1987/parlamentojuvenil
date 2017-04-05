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
        'client_id'     => env('FACEBOOK_ID'),
        'client_secret' => env('FACEBOOK_SECRET'),
        'redirect'      => env('FACEBOOK_REDIRECT_URL'),
    ],

    // Login social - Twitter
    'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => env('TWITTER_REDIRECT_URL'),
    ],

    // Login social - youtube
    'youtube' => [
        'client_id'     => env('YOUTUBE_ID'),
        'client_secret' => env('YOUTUBE_SECRET'),
        'redirect'      => env('YOUTUBE_REDIRECT_URL'),
    ],

    // Login social - linkedIn
    'linkedin' => [
        'client_id'     =>  env('LINKEDIN_ID'),
        'client_secret' =>  env('LINKEDIN_SECRET'),
        'redirect'      =>  env('LINKEDIN_REDIRECT_URL'),
    ],

    // Login social - instagram
    'instagram' => [
        'client_id'     => env('INSTAGRAM_ID'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect'      => env('INSTAGRAM_REDIRECT_URL'),
    ],

];
