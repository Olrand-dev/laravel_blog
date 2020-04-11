<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'is_published',
    ];

    protected $hidden = [
        'chapter_id',
        'category_id',
        'user_id',
        'is_published',
    ];


    public function chapter()
    {
        return $this->belongsTo('App\Chapter');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function addFields()
    {
        return $this->hasMany('App\EntryAddField');
    }
}
