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

  public function one($id)
    {
        return Report::find($id);
    }
}
