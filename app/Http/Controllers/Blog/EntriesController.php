<?php

namespace App\Http\Controllers\Blog;

use App\Entry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EntriesController extends BlogBaseController
{
    
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        
        return view('blog.entries-list', compact([
            'entries',
        ]));
    }

}
