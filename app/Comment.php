<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'content',
    ];

    protected $hidden = [
        'entry_id',
        'user_id',
    ];


    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function entry()
    {
        return $this->belongsTo('App\Entry');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }
}
