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

Route::get('/', function () {
  $links = DB::table('links')->get();

  return view('welcome')->with('links', $links);
});

Route::get('/about', function () {
  $links = DB::table('links')->get();

  return view('info')->with('links', $links);
});

Route::get('/save', function () {
  $links = DB::table('links')->get();

  return view('save')->with('links', $links);
});

Route::get('/hotel', function () {
  $links = DB::table('links')->get();

  return view('hotel')->with('links', $links);
});

use Illuminate\Http\Request;

Route::post('/', function (Request $request) {
    $data = $request->validate([
        'fname' => 'required|max:255',
        'lname' => 'required|max:255',
        'adress1' => 'required|max:255',
        'adress2' => 'required|max:255',
        'city' => 'required|max:255',
        'state' => 'required|max:255',
        'zip' => 'required|max:5',
    ]);

    $guest = tap(new App\Guests($data))->save();

    return redirect('/');
});