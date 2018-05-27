<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Report;

class AdminController extends Controller
{
  public function disturbances()
  {
    $reports = Report::all();
    return view('admin/driftstorningar', [
      'reports' => $reports,
      ]);
  }

  public function editCampus()
  {
    return view('admin/campus-news-admin');
  }

  public function editFaq()
  {
    return view('admin/questions-admin');
  }

  public function profile()
  {
    $user = Auth::user();

    return view('/admin/profile', [
      'name' => $user->name,
      'email' => $user->email,

    ]);
  }
}
