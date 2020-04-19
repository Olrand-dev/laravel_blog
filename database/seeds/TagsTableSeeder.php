<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');

        DB::table('tags')->insert([
            ['name' => 'Tag1', 'slug' => 'tag-1', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tag2', 'slug' => 'tag-2', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tag3', 'slug' => 'tag-3', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
