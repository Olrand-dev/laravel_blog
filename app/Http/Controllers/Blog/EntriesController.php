<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Chapter;
use App\Entry;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class EntriesController extends BlogBaseController
{


    public function showEntry($slug)
    {
        $entry = Entry::where('slug', 'like', $slug)->first();
        return view('blog.entry', compact('entry'));
    }

    
    /**
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function showList(Request $request, array $options = [])
    {
        $session = $request->session();
        
        $perPage = ($session->has('entries_per_page')) ?
            $session->get('entries_per_page') : 
            Config::get('constants.blog.entries_list.per_page_def');
        $sortType = ($session->has('entries_sort_type')) ?
            $session->get('entries_sort_type') : 
            Config::get('constants.blog.entries_list.sort_type_def');

        $sort = $this->parseSortType($sortType);
        $listType = $options['container'] ?? 'all';
        $routeName = $options['route_name'] ?? 'entries-list';

        $entries = $this->getEntriesBuilder($sort['field'], $sort['direction'], $options)
            ->paginate($perPage);
        
        return view('blog.entries-list', compact([
            'listType',
            'routeName',
            'options',
            'entries',
            'sortType',
            'perPage',
        ]));
    }


    private function showListByContainer(Request $request, $type, $slug, $model)
    {
        $name = $model::where('slug', 'like', $slug)->first()->name;

        return $this->showList($request, [
            'container' => $type,
            'container_slug' => $slug,
            'container_name' => $name,
            'route_name' => 'entries-list-by-' . $type,
        ]);
    }


    public function showListByCategory(Request $request, $catSlug)
    {
        return $this->showListByContainer($request, 'category', $catSlug, Category::class);
    }


    public function showListByChapter(Request $request, $chapSlug)
    {
        return $this->showListByContainer($request, 'chapter', $chapSlug, Chapter::class);
    }


    public function showListByTag(Request $request, $tagSlug)
    {
        return $this->showListByContainer($request, 'tag', $tagSlug, Tag::class);
    }


    public function updateShowSettings(Request $request)
    {
        $key = $request->input('key');
        $value = $request->input('value');

        if (!in_array($key, array_keys(self::ENTRIES_SHOW_SETTINGS))) {
            return response()->json(
                $this->apiResponse('error', ['Wrong settings key'], ['key' => $key])
            );
        }

        settype($value, self::ENTRIES_SHOW_SETTINGS[$key]);
        $request->session()->put($key, $value);
        
        return response()->json($this->apiResponse());
    }

}
