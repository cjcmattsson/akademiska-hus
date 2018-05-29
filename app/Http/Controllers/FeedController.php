<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Cities;
use Cookie;
use App\Campus;


class FeedController extends Controller
{
  public function news()
  {
    $campus = request()->cookie('campus');
    $campusNews = Campus::with('news')->where('name', $campus)->first();
    return view('/news', [
      'campusNews' => $campusNews->news,
    ]);
  }

}
