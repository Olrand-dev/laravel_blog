<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parent = factory(Page::class)->create();
        $parent->children()->createMany(factory(Page::class, 3)->raw());
        $parent->save();

        factory(Page::class, 3)->create();
    }
}
