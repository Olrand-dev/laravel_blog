<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];


    public function children()
    {
        return $this->hasMany(self::class);
    }

    public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function entries()
    {
        return $this->hasMany('App\Entry');
    }
}
