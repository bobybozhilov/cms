<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        //Populate Users table
        factory(App\User::class, 10) -> create();

        //Add myself to Users table
        DB ::table('users')
            -> where('id', 1)
            -> update(['name'       => 'Bobo Bozhilov',
                       'email'      => 'bobobozhilov@example.com',
                       'password'   => bcrypt('123456'),
                       'country_id' => '1',
                       'created_at' => Carbon ::now(),
                       'updated_at' => Carbon ::now(),
                      ]);
    }
}

