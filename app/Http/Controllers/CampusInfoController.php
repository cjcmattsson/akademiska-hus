<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CampusInfoController extends Controller
{
    public function index()
    {
        if(!isset($_COOKIE['campus'])) {
          $campus = "Select Campus";
        } else {
          $campus = $_COOKIE['campus'];
        };

        return view('campusinfo', [
          'campus' => $campus,
        ]);
    }
  }
