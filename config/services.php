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
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/facebook/callback',
    ],

    // Login social - Twitter
    'twitter' => [
        'client_id'     => env('TWITTER_ID'),
        'client_secret' => env('TWITTER_SECRET'),
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/twitter/callback',
    ],

    // Login social - youtube
    'youtube' => [
        'client_id'     => env('YOUTUBE_ID'),
        'client_secret' => env('YOUTUBE_SECRET'),
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/youtube/callback',
    ],

    // Login social - linkedIn
    'linkedin' => [
        'client_id'     =>  env('LINKEDIN_ID'),
        'client_secret' =>  env('LINKEDIN_SECRET'),
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/linkedin/callback',
    ],

    // Login social - instagram
    'instagram' => [
        'client_id'     => env('INSTAGRAM_ID'),
        'client_secret' => env('INSTAGRAM_SECRET'),
        'redirect'      => 'http://local.parlamentojuvenil.com/auth/instagram/callback',
    ],

];
