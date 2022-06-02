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
    'google' => [
        'client_id' => '52474121316-mrqhb2r8n8belrnps01fci84lgr4kngk.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'https://jeemjam.com/auth/google/callback',
    ],
    'facebook' => [
        'client_id' => '952173898793678',
        'client_secret' => 'd8938b459e08430a6f714c14c176ecb3',
        'redirect' => 'https://jeemjam.com/auth/facebook/callback',
    ],
    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

];
