<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Cities;
use Cookie;


class FeedController extends Controller
{
  public function news()
  {
      return view('news');
  }

}
