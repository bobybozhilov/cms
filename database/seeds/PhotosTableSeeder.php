<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB ::table('photos')
            -> insert([
                          [
                              'path'           => 'bobo.jpg',
                              'imageable_id'   => 1,
                              'imageable_type' => 'App\User',
                              'created_at'     => Carbon ::now(),
                              'updated_at'     => Carbon ::now(),

                          ],
                          [
                              'path'           => 'laravel.jpg',
                              'imageable_id'   => 1,
                              'imageable_type' => 'App\Post',
                              'created_at'     => Carbon ::now(),
                              'updated_at'     => Carbon ::now(),

                          ],
                      ]);
    }
}
