<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults For Spotify
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication values for the spotify
    | access data.
    |
    */
    'credentials' => [
        'clientID'      => env('SPOTIFY_CLIENT_ID', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
        'clientSecret'  => env('SPOTIFY_CLIENT_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'),
    ],
];
