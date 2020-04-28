<?php

declare(strict_types=1);

namespace App\Http\Controllers\Blog;

use App\Entry;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class BlogBaseController extends Controller
{

    protected const ENTRIES_SHOW_SETTINGS = [
        'entries_sort_type' => 'string',
        'entries_per_page' => 'int',
    ];


    protected function getOneEntry(string $slug) : Entry
    {
        return Entry::where('slug', 'like', $slug)
            ->withCount('comments')
            ->with(['category', 'chapter', 'tags'])
            ->first();
    }
    

    /**
     * @param string $sortField
     * @param string $sortDirection
     * @param array $options
     * 
     * @return Illuminate\Database\Eloquent\Builder
     */
    protected function getEntriesBuilder(
        string $sortField, 
        string $sortDirection = 'desc',
        array $options = []
    ) : Builder
    {
        $containerType = $options['container_type'] ?? '';
        $builder = null;

        if ($containerType !== '') {
            $slug = $options['container_slug'];

            switch ($containerType) {
                case 'category': {
                    $builder = Entry::whereHas('category', function (Builder $query) use ($slug) {
                        $query->where('slug', 'like', $slug);
                    });
                    break;
                }
                case 'chapter': {
                    $builder = Entry::whereHas('chapter', function (Builder $query) use ($slug) {
                        $query->where('slug', 'like', $slug);
                    });
                    break;
                }
                case 'tag': {
                    $builder = Entry::whereHas('tags', function (Builder $query) use ($slug) {
                        $query->where('slug', 'like', $slug);
                    });
                    break;
                }
            }

            $builder = $builder->with(['category', 'chapter', 'tags']);
                
        } else {
            $builder = Entry::with(['category', 'tags']);
        }

        return $builder->withCount('comments')
            ->orderBy($sortField, $sortDirection);
    }

}
