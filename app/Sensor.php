<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
     protected $fillable = [
        'kantxa_id', 'viento', 'sol', 'ocupado'
    ];

    public function kantxa()
    {
        return $this->belongsTo('App\Kantxa');
    }
}
