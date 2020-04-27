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

        $newEntries = $this->getEntriesBuilder('created_at')
            ->take($newListSize)
            ->get();
        $popularEntries = $this->getEntriesBuilder('views')
            ->take($popListSize)
            ->get();
        
        return view('blog.main-page', compact([
            'newEntries',
            'popularEntries',
        ]));
    }

}
