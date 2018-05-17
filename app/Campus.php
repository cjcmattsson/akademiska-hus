<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cities;

class Campus extends Model
{
    protected $fillable = ['name', 'info'];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }
}
