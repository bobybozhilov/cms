<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB ::table('videos')
            -> insert([
                          [
                              'name'       => 'laravel.mov',
                              'created_at' => Carbon ::now(),
                              'updated_at' => Carbon ::now(),
                          ],
                          [
                              'name'       => 'phpstorm.mov',
                              'created_at' => Carbon ::now(),
                              'updated_at' => Carbon ::now(),
                          ],
                      ]);
    }
}
