<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    //
     protected $fillable = [
        'llover', 'humerdad', 'temperatura', 'ocupado', 'viento', 'radiacion'
    ];
    


    public function kantxa()
    {
        return $this->belongsTo('App\Kantxa');
    }
}
