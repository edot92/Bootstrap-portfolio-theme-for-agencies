<?php

return

    [
        /*
         * The siteId is used to retrieve and display Google Analytics statistics
         * in the admin-section.
         *
         * Should look like: ga:xxxxxxxx.
         */
      //   'siteId' => env('ANALYTICS_SITE_ID'),
        'siteId' => env('ga:129525730'),
        // ANALYTICS_SERVICE_EMAIL=sewamobildibali@fluent-ego-143117.iam.gserviceaccount.com
        // ANALYTICS_SITE_ID=ga:129525730
        /*
         * Set the client id
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx.apps.googleusercontent.com
         */
        'clientId' => '102289815695758725161.apps.googleusercontent.com',

        /*
         * Set the service account name
         *
         * Should look like:
         * xxxxxxxxxxxx-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx@developer.gserviceaccount.com
         */
        'serviceEmail' => env('sewamobildibali@fluent-ego-143117.iam.gserviceaccount.com'),
//sewamobildibali@fluent-ego-143117.iam.gserviceaccount.com
        /*
         * You need to download a p12-certifciate from the Google API console
         * Be sure to store this file in a secure location.
         */
        //certificatePath= >storage_path(laravel-analytics/xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx-privatekey.p12'

        'service_account_credentials_json' => storage_path('app/laravel-google-analytics/tugasakhirweb2015donirental-c756d7307b27.json'),

        /*
         * The amount of minutes the Google API responses will be cached.
         * If you set this to zero, the responses won't be cached at all.
         */
        'cacheLifetime' => 60 * 24 * 2,

        /*
         * The amount of seconds the Google API responses will be cached for
         * queries that use the real time query method. If you set this to zero,
         * the responses of real time queries won't be cached at all.
         */
        'realTimeCacheLifetimeInSeconds' => 5,
    ];
