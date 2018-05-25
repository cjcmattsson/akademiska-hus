<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cities;
use App\Building;

class Campus extends Model
{
    protected $fillable = ['name', 'info'];

    public function city()
    {
        return $this->belongsTo(Cities::class);
    }

    public function building()
    {
        return $this->hasMany(Building::class, 'campus_id');
    }
}
