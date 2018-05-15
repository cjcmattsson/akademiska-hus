<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Cities;
use Cookie;


class FeedController extends Controller
{
  public function index()
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

      return view('feed');
  }

}
