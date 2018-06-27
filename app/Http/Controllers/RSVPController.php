<?php

namespace E2Wedding\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use E2Wedding\RSVP;

class RSVPController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth', ['except' => ['search', 'show', 'save']]);
  }

  public function search(Request $request) {
    $result = RSVP::where(function($query) {
        global $request;
        $query->where('fname', $request->fname)
          ->where('lname', $request->lname);
      })->orWhere('lname', $request->lname)->get();

    return view('pages.rsvp.result')->with('guests', $result);
  }

  public function show($id) {
    $result = RSVP::where('id', $id)->first();
    $guest[] = [
      'id' => $result->id,
      'fname' => $result->fname,
      'lname' => $result->lname,
      'guest_id' => $result->guest_id,
      'allergy' => $result->allergy,
      'has_rsvp' => $result->has_rsvp,
      'attending' => $result->attending,
      'created_at' => $result->created_at,
      'updated_at' => $result->updated_at,
    ];

    $result = RSVP::where('id', $result->guest_id)->orWhere('guest_id', $result->id)->get();

    if(count($result) != 0) {
      foreach ($result as $single) {
        $guest[] = [
          'id' => $single->id,
          'fname' => $single->fname,
          'lname' => $single->lname,
          'guest_id' => $single->guest_id,
          'allergy' => $single->allergy,
          'has_rsvp' => $single->has_rsvp,
          'attending' => $single->attending,
          'created_at' => $single->created_at,
          'updated_at' => $single->updated_at,
        ];
      }
    }

    return view('pages.rsvp.show')->with('guests', $guest)->with('id', $id);
  }

  public function save(Request $request) {

    foreach ($request->guest as $guest) {
      if(!isset($request->rsvp[$guest])) {
        $rsvp = 0;
      } else {
        $rsvp = $request->rsvp[$guest];
      }
      $data['attending'] = $rsvp;
      $data['updated_at'] = Carbon::now()->format('Y-m-d H:i:s');
      $data['has_rsvp'] = 1;
      $data['allergy'] = $request->allergy[$guest];

      RSVP::where('id', $guest)->update($data);

      unset($data);
      unset($rsvp);
    }


    return redirect("rsvp/{$request->id}")->with('success', "RSVP(s) Have Been Updated");
  }

  public function list() {
    $guests = RSVP::all();

    return view('pages.rsvp.list')->with('guests', $guests);
  }
}
