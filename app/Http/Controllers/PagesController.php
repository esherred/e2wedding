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
    return view('pages.registry');
  }
}
