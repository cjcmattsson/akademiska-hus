<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cities;
use App\Building;
use App\CampusNews;

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

    public function news()
    {
        return $this->hasMany(CampusNews::class, 'campus_id');
    }
}
