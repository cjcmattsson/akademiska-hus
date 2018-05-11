<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Http\Controllers\Controller;

class CreateReportController extends Controller
{
  public function index()
  {
    return view('/report');
  }


  public function sendReport(Request $request)
  {

    $this->validate($request, [
      'title' => 'required|string|max:40|min:1',
      'status' => 'required|string|min:1',
      'body' => 'required|string|max:100|min:1'
    ]);

    $createReport = Report::create([
      'title' => request('title'),
      'status' => request('status'),
      'body' => request('body'),
      'phone' => request('phone')
    ]);

    if($createReport){
      return view('/report');
    } else {
      abort(404);
    }

  }

}
