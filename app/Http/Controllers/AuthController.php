<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
  public function loginPage()
  {
    return view('/login');
  }

  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);

    if (Auth::attempt($credentials)) {
      return redirect()->intended('/dashboard');
    }
    return back()->withErrors('The email and/or password you entered was incorrect');
  }

  public function logout(Request $request)
  {
    Auth::logout();
    return redirect('/');
  }
}
