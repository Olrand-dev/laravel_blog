<?php

use App\Chapter;
use Illuminate\Database\Seeder;

class ChaptersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = Chapter::create([
            'name' => 'ParentChapter1',
            'slug' => 'p-chapt-1',
        ]);
        $parent->children()->createMany([
            [
                'name' => 'ChildChapter1',
                'slug' => 'c-chapt-1',
            ],
            [
                'name' => 'ChildChapter2',
                'slug' => 'c-chapt-2',
            ],
            [
                'name' => 'ChildChapter3',
                'slug' => 'c-chapt-3',
            ],
        ]);
        $parent->save();

        $parent = Chapter::create([
            'name' => 'ParentChapter2',
            'slug' => 'p-chapt-2',
        ]);
        $parent->children()->createMany([
            [
                'name' => 'ChildChapter4',
                'slug' => 'c-chapt-4',
            ],
            [
                'name' => 'ChildChapter5',
                'slug' => 'c-chapt-5',
            ],
        ]);
        $parent->save();
    }
}
