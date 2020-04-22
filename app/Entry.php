<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'image',
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


    /**
     * @return string
     */
    public function getDateAttribute() 
    {
        return Carbon::parse($this->created_at)->format('d.m.Y');
    }


    /**
     * @return string
     */
    public function getDateUpdatedAttribute() 
    {
        return Carbon::parse($this->updated_at)->format('d.m.Y');
    }


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