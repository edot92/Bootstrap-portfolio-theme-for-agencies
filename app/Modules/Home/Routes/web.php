<?php
use Illuminate\Http\Request;

use App\Http\Requests;
use Spatie\Analytics\Period;
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

Route::group(['prefix' => 'home'], function() {
    Route::get('/', function() {
return view('home::index');
      //  dd('This is the Home module index page. Build something great!');
    });
    Route::get('/sundulganhe', function() {
      //fetch the most visited pages for today and the past week
//Analytics::fetchMostVisitedPages(Period::days(7));
      $analytics = Analytics::getVisitorsAndPageViews(7);
      return($analytics);
// return view('home::index',)->with(json_encode($analytics));
       dd('This is the Home module index page. Build something great!');
    });
});
