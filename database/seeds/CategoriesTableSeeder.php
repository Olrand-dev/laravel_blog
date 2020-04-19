<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = Category::create([
            'name' => 'ParentCategory1',
            'slug' => 'p-cat-1',
        ]);
        $parent->children()->createMany([
            [
                'name' => 'ChildCategory1',
                'slug' => 'c-cat-1',
            ],
            [
                'name' => 'ChildCategory2',
                'slug' => 'c-cat-2',
            ],
            [
                'name' => 'ChildCategory3',
                'slug' => 'c-cat-3',
            ],
        ]);
        $parent->save();

        $parent = Category::create([
            'name' => 'ParentCategory2',
            'slug' => 'p-cat-2',
        ]);
        $parent->children()->createMany([
            [
                'name' => 'ChildCategory4',
                'slug' => 'c-cat-4',
            ],
            [
                'name' => 'ChildCategory5',
                'slug' => 'c-cat-5',
            ],
        ]);
        $parent->save();
    }
}
