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
    public function showList(Request $request)
    {
        $session = $request->session();
        
        $perPage = ($session->has('entries_per_page')) ?
            $session->get('entries_per_page') : 
            Config::get('constants.blog.entries_list.per_page_def');
        $sortType = ($session->has('entries_sort_type')) ?
            $session->get('entries_sort_type') : 
            Config::get('constants.blog.entries_list.sort_type_def');

        $sort = $this->parseSortType($sortType);

        $entries = Entry::orderBy($sort['field'], $sort['direction'])
            ->paginate($perPage);
        
        return view('blog.entries-list', compact([
            'entries',
            'sortType',
            'perPage',
        ]));
    }

}
