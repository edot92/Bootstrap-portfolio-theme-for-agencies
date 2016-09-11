<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'daftarsewa'], function() {
    Route::get('/', function() {
      return view ('daftarsewa::index');
        // dd('This is the Daftarsewa module index page. Build something great!');
    });
});
