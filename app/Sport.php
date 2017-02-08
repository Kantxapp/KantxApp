<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sport extends Model
{

    protected $fillable = [
        'name', 'description'
    ];
    
    public function events()
    {
        return $this->hasMany('App\Event');
    }
    
    public function kantxas()
    {
        return $this->belongsToMany('App\Kantxa');
    }
}
