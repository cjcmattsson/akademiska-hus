<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Report;

class AdminController extends Controller
{
  public function dashboard()
  {
    $reports = Report::all();
    return view('/admin/dashboard', [
      'reports' => $reports,
      ]);
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
