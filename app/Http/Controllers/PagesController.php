<?php

namespace E2Wedding\Http\Controllers;

use Illuminate\Http\Request;
use E2Wedding\Gift;
use E2Wedding\HoneymoonLocation;

class PagesController extends Controller
{

  public function index() {
    return view('pages.index');
  }

  public function about() {
    return view('pages.info');
  }

  public function save() {
    return view('pages.save');
  }

  public function hotel() {
    return view('pages.hotel');
  }

  public function party() {
    return view('pages.party');
  }

  public function registry() {
    $locations = array(
      'Croatia',
      'Italy',
      'South Africa',
      'Kenya',
      'India',
      'Nepal',
      'Sri Lanka',
      'Tahiti',
      'New Zealand',
      'Australia',
      'Brazil',
      'Peru',
      'Belize',
      'Costa Rica',
      'Other',
    );

    $registry = array(
      array(
        'title' => 'Airfare',
        'description' => 'Help us travel the world!',
        'id' => 'airfare', 
      ),
      array(
        'title' => 'Accomodations',
        'description' => 'We will likely want a place to sleep.',
        'id' => 'accomidations', 
      ),
      array(
        'title' => 'Museums and Tours',
        'description' => 'The options are limitless!',
        'id' => 'museums', 
      ),
      array(
        'title' => 'Day Trips',
        'description' => ' Help Erica see EVERYTHING.',
        'id' => 'day-trips', 
      ),
      array(
        'title' => 'Ghost Tour',
        'description' => 'One of our favorite things to do at any new place',
        'id' => 'ghosts', 
      ),
      array(
        'title' => 'Daredevil Adventure',
        'description' => 'Skydiving? Bungee Jumping? Who knows!',
        'id' => 'daredevil', 
      ),
      array(
        'title' => 'Animal Encounter',
        'description' => 'Anywhere we go, one of us will want to pet something fuzzy.',
        'id' => 'animals', 
      ),
      array(
        'title' => 'Spa Time/Couples Massage',
        'description' => 'Because we all know Erica is going to run us ragged with sightseeing.',
        'id' => 'spa', 
      ),
      array(
        'title' => 'Breakfast/Brunch/Lunch',
        'description' => 'We (aka Erica) are not very good at mornings.',
        'id' => 'food', 
      ),
      array(
        'title' => 'Dinner',
        'description' => 'Help us be international foodies!',
        'id' => 'dinner', 
      ),
      array(
        'title' => 'Tacky Souvenirs',
        'description' => 'This is unavoidable.',
        'id' => 'tacky-souvenirs', 
      ),
      array(
        'title' => 'Non-tacky Souvenirs',
        'description' => 'Eric hates kitsch.',
        'id' => 'souvenirs', 
      ),
      array(
        'title' => 'Tasty Beverages',
        'description' => 'Erica drinks a LOT of water. Also wine, champagne, bourbon...',
        'id' => 'drinks', 
      ),
      array(
        'title' => 'Giver\'s Choice',
        'description' => 'Tell us where we should go and what we should do!',
        'id' => 'other', 
      ),
    );
    return view('pages.registry')->with(array(
      'locations' => $locations,
      'registry' => $registry,
    ));
  }

  public function gifts(Request $request) {
    $requestData = $request->request->all();
    $total = 0;
    $saveData = array();
    foreach ($requestData as $key => $value) {
      if ($key != '_token') {
        if ($value != null) {
          $total += $value;

          $saveData[] = array(
            'gift' => $key,
            'amt' => $value,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),
          );
        }
      }
    }

    Gift::insert($saveData);

    if ($total == 0) {
      return redirect('/registry?no-amt=1');
    } else {
      return redirect('/registry/' . $total);
    }
  }

  public function paypal($amt) {
    return redirect('https://www.paypal.me/E2Honeymoon/'.$amt);
  }

  public function locations(Request $request) {
    if ($request->input('location') == null) {
      return redirect('/registry?no-loc=1');
    }
    $locations = $request->input('location');
    $saveData = array();
    foreach ($locations as $location) {
      if ($location == 'Other') {
        $saveData[] = array(
          'location' => $request->input('other'),
          'created_at'=>date('Y-m-d H:i:s'),
          'updated_at'=> date('Y-m-d H:i:s'),
        );
      } else {
        $saveData[] = array(
        'location' => $location,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=> date('Y-m-d H:i:s'),
      );
      }
    }
    HoneymoonLocation::insert($saveData);

    return redirect('/registry?success=1');
  }
}
