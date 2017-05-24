<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB ::table('role_user')
                -> insert([
                              'user_id'    => $i,
                              'role_id'    => random_int(1, 3),
                              'created_at' => Carbon ::now(),
                              'updated_at' => Carbon ::now(),
                          ]);
        }
    }
}
