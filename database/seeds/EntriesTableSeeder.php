<?php

use App\Category;
use App\Chapter;
use App\Entry;
use Illuminate\Database\Seeder;

class EntriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Entry::class, 30)->make()->each(function ($entry) {
            $chapter = Chapter::all()->random();
            $category = Category::all()->shuffle()->first();

            $entry->chapter()->associate($chapter);
            $entry->category()->associate($category);
            $entry->save();
        });
    }
}
