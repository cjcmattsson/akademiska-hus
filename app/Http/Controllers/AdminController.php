<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AdminController extends Controller
{
  public function getContent()
  {
    return view('/admin');
  }
}
