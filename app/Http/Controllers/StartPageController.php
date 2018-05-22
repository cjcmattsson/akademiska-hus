<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class StartpageController extends Controller
{
    public function index()
    {
        return view('startpage');
    }
}
