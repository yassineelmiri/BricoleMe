<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],


    'google' => [
        'client_id' => '220294548164-copiq0grnqhtgmcfg5sqtnah84onj7qn.apps.googleusercontent.com',
        'client_secret' => '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' ,
        'redirect' => 'http://localhost/auth/google/user/data'
    ],

    'facebook' => [
        'client_id' => '2114206515609445',
        'client_secret' => '7cc4b7148dedfb94be485f67d22eac04' ,
        'redirect' => 'https://76e4-197-230-250-154.ngrok-free.app/auth/facebook/user/data'
    ]

];
