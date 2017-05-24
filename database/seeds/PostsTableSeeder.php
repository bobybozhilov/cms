<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB ::table('posts')
            -> insert([
                          ['title' => 'first Post',
                           'content' => 'first post content lorem ipsum...',
                           'created_at' => Carbon ::now(),
                           'updated_at' => Carbon ::now(),
                           'is_admin' => '0'
                          ],

                          ['title' => 'javascript Post',
                           'content' => 'JS seconds post content lore...',
                           'created_at' => Carbon ::now(),
                           'updated_at' => Carbon ::now(),
                           'is_admin' => '0'
                          ],
                      ]);
    }
}
