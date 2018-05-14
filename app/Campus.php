<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cities;
class Campus extends Model
{
    

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
