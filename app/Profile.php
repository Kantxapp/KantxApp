<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'location','about','user_id', 'name', 'surname1', 'surname2', 'phone', 'province' ,'city', 'phone',
        ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
