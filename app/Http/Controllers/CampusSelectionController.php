<?php

namespace App\Http\Controllers;

use Cookie;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cities;
use Illuminate\Http\Request;

class CampusSelectionController extends Controller
{
  public function campusSelection()
  {
    if(!isset($_COOKIE['campus'])) {
      $campus = false;
    } else {
      $campus = $_COOKIE['campus'];
    }

    if($campus) {
      return view('feed');
    } else {
      $cities = Cities::with('campuses')->get();
      return view('index', [
        'cities' => $cities,
      ]);
    }

  }
}
