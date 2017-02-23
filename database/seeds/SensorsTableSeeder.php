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
        $sensor1 = DB::table('sensors')->insert([
            
        'llover' => 1,
        'humedad' => '30',
        'temperatura' => '28',
        'ocupado' => 1,
        'viento' => '23',
        'radiacion' => '6'

        ]);
        $sensor2 = DB::table('sensors')->insert([
        'llover' => 0,
        'humedad' => '30',
        'temperatura' => '18',
        'ocupado' => 1,
        'viento' => '4',
        'radiacion' => '4'
        ]);
        $sensor3 = DB::table('sensors')->insert([

        ]);
        $sensor4 = DB::table('sensors')->insert([

        ]);
        $sensor5 = DB::table('sensors')->insert([

        ]);
        $sensor6 = DB::table('sensors')->insert([

        ]);
        $sensor7 = DB::table('sensors')->insert([

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
