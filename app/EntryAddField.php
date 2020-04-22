<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EntryAddField extends Model
{
    protected $fillable = [
        'name',
        'value',
    ];

    protected $hidden = [
        'entry_id',
    ];


    public function entry()
    {
        return $this->belongsTo('App\Entry');
    }
    
}
