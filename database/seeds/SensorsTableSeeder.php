<?php

use Illuminate\Database\Seeder;

class SensorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sensor = DB::table('sensors')->insert([
            
        'llover' => '24',
        'humedad' => '30',
        'temperatura' => '18',
        'ocupado' => 1,
        'viento' => '23',
        'radiacion' => '50'

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        $sensor = DB::table('sensors')->insert([

        ]);
        

    }
}
