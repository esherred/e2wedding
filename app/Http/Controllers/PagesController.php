<?php

namespace E2Wedding\Http\Controllers;

use Illuminate\Http\Request;

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
}
