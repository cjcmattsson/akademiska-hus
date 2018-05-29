<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Campus;
use App\Http\Controllers\Controller;

class CreateReportController extends Controller
{
  public function index()
  {
      $campus = request()->cookie('campus');
      $buildings = Campus::with('building')->where('name', $campus)->first();
      return view('/report', [
        'buildings' => $buildings->building,
      ]);
  }


  public function sendReport(Request $request)
  {

    // $this->validate($request, [
    //   'building' => 'required|string|max:40|min:1',
    //   'description' => 'required|string|max:100|min:1',
    //   'image' => 'required|string|max:100|min:1',
    //   'telephone' => 'required|string|max:100|min:1',
    //   'email' => 'required|string|max:100|min:1',
    // ]);

    $createReport = Report::create([
      'building' => request('building'),
      'description' => request('description'),
      'name' => request('name'),
      'telephone' => request('telephone'),
      'email' => request('email'),
    ]);

    if($createReport){
      return redirect('feed');
    } else {
      abort(404);
    }

  }

}
