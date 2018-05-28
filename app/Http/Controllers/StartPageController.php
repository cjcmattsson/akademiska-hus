<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Cookie;
class StartpageController extends Controller
{
    public function index()
    {
      if(Cookie::has('campus')) {
        echo "<script>setTimeout(function(){ window.location.href = '/feed'; }, 2000);</script>";
        return view('startpage');
      } else {
        echo "<script>setTimeout(function(){ window.location.href = '/setCampus'; }, 3000);</script>";
        return view('startpage');
      }
        // return view('startpage')->withHeaders(['refresh' => '3;url=http://localhost:3000/feed']);
    }
}
