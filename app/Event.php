<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    //

    protected $fillable = [
        'sport_id', 'kantxa_id','max_users', 'start_at', 'finish_at', 'rules'
    ];

    public function kantxa()
    {
        return $this->belongsTo('App\Kantxa');
    }

    public function sport()
    {
        return $this->belongsTo('App\Sport');
    }
    
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
