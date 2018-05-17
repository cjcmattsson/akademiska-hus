<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Campus;

class CampusInfoController extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['campus'])) {
          $campus = "Select Campus";
        } else {
          $campus = $_COOKIE['campus'];
          $campusInfo = Campus::where('name', $campus)->first();
        };
        return view('campusinfo', [
          'campus' => $campusInfo
        ]);


    }

  }
