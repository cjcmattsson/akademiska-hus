<?php

namespace App\Composers;

use Illuminate\View\View;
use App\Campus;
use Illuminate\Http\Request;

class CampusComposer
{

    public function compose(View $view)
    {
      $campus = request()->cookie('campus');
      $campus = Campus::where('name', $campus)->first();
      $view->with('campus', $campus);
    }
}
