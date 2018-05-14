<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Cities;

class CampusSelectionController extends Controller
{
  public function campusSelection()
  {
    $cities = Cities::all();
    return view('/index', [
      'cities' => $cities,
      ]);
  }
}
