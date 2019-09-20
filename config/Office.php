<?php

return [
    'appId'              => env('OFFICE_APP_ID'),

    'secret'             => env('OFFICE_SECRET_APP_KEY'),

    'redirect_url'       => env('OFFICE_REDIRECT_URI'),

    'scopes'             => env('OFFICE_SCOPES'),

    'authority'          => 'https://login.microsoftonline.com/common',

    'authority_endpoint' => '/oauth2/v2.0/authorize',

    'authority_token'    => '/oauth2/v2.0/token',
];

