<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        //Add records to Countries table
        DB ::table('countries')
            -> insert([
                          ['name' => 'Bulgaria', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                          ['name' => 'Russia', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                          ['name' => 'USA', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                          ['name' => 'UK', 'created_at' => Carbon ::now(), 'updated_at' => Carbon ::now()],
                      ]);
    }
}
