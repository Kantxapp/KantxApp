<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partake extends Model
{
    //
    protected $fillable = [
        'user_id', 'event_id'
    ];
}
