<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cities;
use Illuminate\Http\Request;

class CampusSelectionController extends Controller
{

  public function setCampusCookie()
  {
    Cookie::queue(Cookie::forever('campus', request()->get('campus')));
    return view('feed');
  }


  public function campusSelection()
  {
    if(Cookie::has('campus')) {
      return redirect()->route('feed');
    }
    $cities = Cities::with('campuses')->get();
    return view('index', [
      'cities' => $cities,
    ]);

  }


}
