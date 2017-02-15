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
        // $this->call(UsersTableSeeder::class);
        //sports table seeder
        if(DB::table('sports')->get()->count() == 0){

            DB::table('sports')->insert([

                [
                    'name' => 'Baloncesto',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/baloncesto.png',
                ],
                [
                    'name' => 'Balonmano',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/balonmano.png',
                ],
                [
                    'name' => 'Bicicleta',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/bicicleta.png',
                ],
                [
                    'name' => 'Futbol 11',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol11.png',
                ],
                [
                    'name' => 'Futbol 7',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol7.png',
                ],
                [
                    'name' => 'Futbol 5',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/futbol5.png',
                ],
                [
                    'name' => 'Natacion',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/natacion.png',
                ],
                [
                    'name' => 'Padel',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/padel.png',
                ],
                [
                    'name' => 'Running',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/running.png',
                ],
                [
                    'name' => 'Senderismo',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/senderismo.png',
                ],
                [
                    'name' => 'Tenis',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/tenis.png',
                ],
                [
                    'name' => 'Voleibol',
                    'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'img_path' => '/assets/images/sports/voleibol.png',
                ],

            ]);

        } else { echo "\e[31msports table already contains data"; 
            
        }//end sportsTableSeeder
    }
}
