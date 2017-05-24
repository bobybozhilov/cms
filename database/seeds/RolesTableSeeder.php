<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB ::table('roles')
            -> insert([
                          ['id' => '1', 'name' => 'Admin', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                          ['id' => '2', 'name' => 'User', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                          ['id' => '3', 'name' => 'Guest', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                      ]);
    }
}
