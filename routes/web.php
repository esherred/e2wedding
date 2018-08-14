<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Http\Request;

if (env('APP_ENV') === 'production') {
    URL::forceSchema('https');
}

Route::get('/', 'PagesController@index')->name('home');

Route::get('/about', 'PagesController@about');

Route::get('/save', 'PagesController@save');

Route::get('/hotel', 'PagesController@hotel');

Route::get('/party', 'PagesController@party');

Route::get('/faq', 'PagesController@faq');

Route::get('/rsvp', 'PagesController@rsvp');

Route::get('/things-to-do', 'PagesController@activities');

Route::get('/invitation', function() {
  return view('pages.invitation');
});

Route::get('/party', function() {
  return view('pages.party');
});

Route::resource('guests', 'GuestsController');

Route::post('rsvp/search', 'RSVPController@search');
Route::post('rsvp/save', 'RSVPController@save');
Route::get('rsvp/list', 'RSVPController@list');
Route::get('rsvp/{id}', 'RSVPController@show');

Route::get('/registry', 'PagesController@registry');
Route::get('/registry/{amt}', 'PagesController@paypal');
Route::post('/registry/gifts', 'PagesController@gifts');
Route::post('/registry/locations', 'PagesController@locations');

Route::get('/engagementparty', function() {
  return view('pages.engagement');
});

Auth::routes();
