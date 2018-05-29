<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Campus;

class CampusNews extends Model
{
    protected $fillable = ['category', 'header', 'body', 'image', 'author'];

    public function campus()
    {
        return $this->belongsTo(Campus::class);
    }
}
