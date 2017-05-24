<?php

use Illuminate\Database\Seeder;

class TaggablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB ::table('taggables')
            -> insert([
                          [
                              'tag_id'        => 1,
                              'taggable_id'   => 1,
                              'taggable_type' => 'App\Video',
                          ],
                          [
                              'tag_id'        => 1,
                              'taggable_id'   => 1,
                              'taggable_type' => 'App\Post',
                          ],
                      ]);

    }
}
