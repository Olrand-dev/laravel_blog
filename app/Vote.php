<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $visible = [];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
