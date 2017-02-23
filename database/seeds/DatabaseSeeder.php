<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SportsTableSeeder::class);
        $this->call(SensorsTableSeeder::class);
        $this->call(ProvincesTableSeeder::class);
        $this->call(KantxasTableSeeder::class);


    }
}
