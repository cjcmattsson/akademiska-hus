<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;


class ReportController extends Controller
{
  public function all()
  {
      return Report::all();
  }

    public function buildings()
    {
      $campus = Campus::with('buildings')->get();
      return view('index', [
        'cities' => $cities,
      ]);
    }
}
