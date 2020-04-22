<?php

namespace App\Http\Controllers\Blog;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class MainPageController extends BlogBaseController
{
    
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $newListSize = Config::get('constants.blog.main_page.new_entries_list_size');
        $popListSize = Config::get('constants.blog.main_page.pop_entries_list_size');

        $newEntries = Entry::with(['category', 'tags'])
            ->withCount('comments')
            ->orderBy('created_at', 'desc')
            ->take($newListSize)
            ->get();
        $popularEntries = Entry::with(['category', 'tags'])
            ->withCount('comments')
            ->orderBy('views', 'desc')
            ->take($popListSize)
            ->get();
        
        return view('blog.main-page', compact([
            'newEntries',
            'popularEntries',
        ]));
    }

}
