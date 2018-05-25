<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campus;

class Building extends Model
{
    protected $fillable = ['name', 'adress', 'code'];

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
}
