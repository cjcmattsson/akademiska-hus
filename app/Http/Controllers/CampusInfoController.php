<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;

class CampusInfoController extends Controller
{
    public function index(Request $request)
    {
        $campus = $request->cookie('campus');
        $campusInfo = Campus::where('name', $campus)->first();
        return view('campusinfo', [
          'campus' => $campusInfo
        ]);
    }

  }
