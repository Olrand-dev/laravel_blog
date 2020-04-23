<?php

use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;


Breadcrumbs::for('main-page', function ($trail) {
    $trail->push('Home', route('main-page'));
});

Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('main-page');
    $trail->push('Blog', route('entries-list'));
});


Breadcrumbs::for('category', function ($trail, $category) {
    if ($category->parent) {
        $trail->parent('category', $category->parent);
    } else {
        $trail->parent('blog');
    }

    $trail->push($category->title, route('category', $category->slug));
});

Breadcrumbs::for('category-entry', function ($trail, $entry) {
    $trail->parent('category', $entry->category);
    $trail->push($entry->title, route('entry', $entry->slug));
});


Breadcrumbs::for('cources', function ($trail) {
    $trail->parent('main-page');
    $trail->push('Cources', route('cources'));
});

Breadcrumbs::for('chapter', function ($trail, $chapter) {
    if ($chapter->parent) {
        $trail->parent('chapter', $chapter->parent);
    } else {
        $trail->parent('cources');
    }

    $trail->push($chapter->title, route('chapter', $chapter->slug));
});

Breadcrumbs::for('chapter-entry', function ($trail, $entry) {
    $trail->parent('chapter', $entry->chapter);
    $trail->push($entry->title, route('entry', $entry->slug));
});


Breadcrumbs::for('pages', function ($trail) {
    $trail->parent('main-page');
    $trail->push('Pages');
});

Breadcrumbs::for('page', function ($trail, $page) {
    if ($page->parent) {
        $trail->parent('page', $page->parent);
    } else {
        $trail->parent('pages');
    }

    $trail->push($page->name, route('page', $page->slug));
});


Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('main-page');
    $trail->push('Contacts', route('contacts'));
});