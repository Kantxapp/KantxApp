<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kantxa extends Model
{
    // public $with = ['sensor'];
    
    protected $fillable = ['place_id', 'name', 'streetNumber', 'route', 'locality', 'province', 'formatedAddress', 'lat', 'lng', 'sensor_id', 'kantxaPic' ];

            
            
    public function sensor()
    {
        return $this->hasOne('App\Sensor');
    }
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    public function sports()
    {
        return $this->belongsToMany('App\Sport');
    }
}
