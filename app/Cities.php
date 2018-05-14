<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campus;

class Cities extends Model
{
    protected $fillable = ['campus_city'];

    public function campuses()
   {
       return $this->hasMany(Campus::class, 'cities_id');
   }

}
