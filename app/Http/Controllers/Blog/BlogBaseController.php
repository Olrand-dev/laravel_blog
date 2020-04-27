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
        $container = $options['container'] ?? '';
        $builder = null;

        if ($container !== '') {
            $slug = $options['container_slug'];

            switch ($container) {
                case 'category': {
                    $builder = Entry::whereHas('category', function (Builder $query) use ($slug) {
                        $query->where('slug', 'like', $slug);
                    });
                    break;
                }
            }

            $builder = $builder->with(['category', 'tags']);
                
        } else {
            $builder = Entry::with(['category', 'tags']);
        }

        return $builder->withCount('comments')
            ->orderBy($sortField, $sortDirection);
    }

}
